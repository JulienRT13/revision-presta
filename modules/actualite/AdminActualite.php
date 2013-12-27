<script type="text/javascript">
function verifForm()
{
	var lien = document.getElementById('lien').value;
	var photo = document.getElementById('photo').value;
	var srcImage = document.getElementById('image').value;
	
	var message = '';
	
	if(lien == '')
	{
		message += 'Champ lien non renseigné\n';
	}
	
	if(photo == '' && srcImage == '')
	{
		message += 'Aucune photo ajoutée\n';
	}
	
	if(message.length > 0)
	{
		alert(message);
		return false;
	}
	else
	{
		return true;
	}
}
</script>

<?php
class AdminActualite extends ModuleAdminController
{
	public function __construct()
	{
		$this->table     = 'actualite';
        $this->className     = 'Actualite';
		$this->addRowAction('edit');
		$this->addRowAction('delete');
		
		$this->fields_list = array(
			'id_actualite' => array(
				'title' 	=> 'ID',
				'width' => 30
			),
			'titre' => array(
				'title' 	=> $this->l('Titre'),
				'width' => 150
			),
			'description' => array(
				'title' 	=> $this->l('Description'),
				'width' => 500
			),
			'lien' => array(
				'title' 	=> $this->l('Lien')
			),
			'dateCreation' => array(
				'title' 	=> $this->l('Date de création'),
				'width' => 100
			),
			'actif' => array(
				'title' 	=> $this->l('Actif'),
				'width' => 30
			)
		);
		
		parent :: __construct();
		
		if(isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['lien']) && isset($_POST['actif']))
		{
			if($_POST['lien'] != NULL && $_POST['actif'] != NULL)
			{
				$titre = htmlentities($_POST['titre'],ENT_QUOTES,'UTF-8');
				$description = htmlentities($_POST['description'],ENT_QUOTES,'UTF-8');
				$lien = htmlentities($_POST['lien'],ENT_QUOTES,'UTF-8');
				$actif = htmlentities($_POST['actif'],ENT_QUOTES,'UTF-8');
				$date = date('Y-m-d');
				
				$regLien = '/^https?:\/\//';
				if(!preg_match($regLien, $lien))
					$lien = 'http://'.$lien;
				
				if(isset($_POST['id_actualite']) && $_POST['id_actualite'] != NULL)
				{
					//update
					if(isset($_FILES['photo']) && $_FILES['photo']['name'] != '')
					{
						move_uploaded_file($_FILES['photo']['tmp_name'] ,  "../modules/actualite/uploads/".$_FILES['photo']['name']);	
						$namePhoto = 'modules/actualite/uploads/'.$_FILES['photo']['name'];
						$id = htmlentities($_POST['id_actualite'],ENT_QUOTES,'UTF-8');
						$sqll = Db::getInstance()->update('actualite', array('titre' => $titre, 'description' => $description, 'photo' => $namePhoto, 'lien' => $lien, 'actif' => $actif, 'dateModification' => $date), 'id_actualite = '.$id.'', 1);
						$this->warnings[] = $this->l('Actualite modifiee');
					}
					else
					{
						$id = htmlentities($_POST['id_actualite'],ENT_QUOTES,'UTF-8');
						$sqll = Db::getInstance()->update('actualite', array('titre' => $titre, 'description' => $description, 'lien' => $lien, 'actif' => $actif, 'dateModification' => $date), 'id_actualite = '.$id.'', 1);
						$this->warnings[] = $this->l('Actualite modifiee');
					}
				}
				else
				{
					//add
					if($_FILES['photo']['error']==0)
					{
						move_uploaded_file($_FILES['photo']['tmp_name'] ,  "../modules/actualite/uploads/".$_FILES['photo']['name']);	
						$namePhoto = 'modules/actualite/uploads/'.$_FILES['photo']['name'];
					
						$sql = Db::getInstance()->Execute("INSERT INTO "._DB_PREFIX_."actualite VALUES('', '$titre', '$description', '$lien', '$namePhoto', '$date', '', '$actif');");
						$this->warnings[] = $this->l('Actualite ajoutee');
					}
					else
					{
						$this->warnings[] = $this->l('Aucune image ajoutee!!');
					}
				}
			}
			else
			{
				$this->warnings[] = $this->l('Des champs ne sont pas renseignes !!');
			}
		}
	}
	
	public function processDelete()
	{
		$id = htmlentities($_GET['id_actualite'],ENT_QUOTES,'UTF-8');
		$sql = Db::getInstance()->Execute("DELETE FROM "._DB_PREFIX_."actualite WHERE id_actualite='$id';");
		$this->warnings[] = $this->l('Actualite suprimee');
	}
	
	public function renderForm()
	{
		$tok = htmlentities($_GET['token'],ENT_QUOTES,'UTF-8');
		
		$titre = '';
		$description = '';
		$photo = '';
		$lien = '';
		$actif = '';
		$dateModif = '';
		$dateCreation = '';
		
		if(isset($_GET['id_actualite']) && $_GET['id_actualite'] != NULL)
		{
			$id = htmlentities($_GET['id_actualite'],ENT_QUOTES,'UTF-8');
			$verif = Db::getInstance()->ExecuteS("SELECT * FROM "._DB_PREFIX_."actualite WHERE id_actualite='$id';");
				foreach($verif as $result)
				{
					$titre = $result['titre'];
					$description = $result['description'];
					$photo = $result['photo'];
					$lien = $result['lien'];
					$actif = $result['actif'];
					
					$dateModif = $result['dateModification'];
					$dateModifTemp = explode('-', $dateModif);
					$dateModif = $dateModifTemp[2].'/'.$dateModifTemp[1].'/'.$dateModifTemp[0];
					
					$dateCreation = $result['dateCreation'];
					$dateCreationTemp = explode('-', $dateCreation);
					$dateCreation = $dateCreationTemp[2].'/'.$dateCreationTemp[1].'/'.$dateCreationTemp[0];
				}
		}
		
		
		
		$date = '';
		if($dateModif == '00/00/0000')
			$date = 'Créer le '.$dateCreation; 
		else
			$date = 'Créer le '.$dateCreation.' et modifié le '.$dateModif; 
		
		$this->_html .= 
		"
		<form action='index.php?controller=AdminActualite&token=".$tok."' method='post' onsubmit='return verifForm()' enctype='multipart/form-data'>
		<fieldset>
		<legend>Actualité</legend>
		";
		if(isset($_GET['id_actualite']) && $_GET['id_actualite'] != NULL)
		{
			$this->_html .=
			"
			<p class='preference_description'>".$date."</p>
			";
		}
		$this->_html .=
		"
		<div style='clear: both; padding-top:15px;'>
		<label class='conf_title'>Titre</label>
		<div class='margin-form'>
		<input type='text' size='50' name='titre' maxlength='15' id='titre' value='".$titre."' />
		<sup>*</sup>
		<p class='preference_description'>ex: Randonée du col Bayard (15 caractères max)</p>										</div>
		</div>
		<div class='clear'></div>
		
		<div style='clear: both; padding-top:15px;'>
		<label class='conf_title'>Description</label>
		<div class='margin-form'>
		<input type='text' size='50' name='description' maxlength='50' id='description' value='".$description."' />
		<sup>*</sup>
		<p class='preference_description'>ex: Marche de 20km dans la forêt (50 caractères max)</p>										</div>
		</div>
		<div class='clear'></div>
		
		<div style='clear: both; padding-top:15px;'>
		<label class='conf_title'>Lien</label>
		<div class='margin-form'>
		<input type='text' size='50' name='lien' required maxlength='200' id='lien' value='".$lien."' />
		<sup>*</sup>
		<p class='preference_description'>ex: http://www.youtube.com</p>										</div>
		</div>
		<div class='clear'></div>
		
		<div style='clear: both; padding-top:15px;'>
		<label class='conf_title'>Image</label>
		<div class='margin-form'>
		<input type='file' size='40' name='photo' id='photo'>
		<sup>*</sup>
		<p class='preference_description'>Image avec de préférence la même largeur et hauteur</p>
		</br>
		<p>Image actuel : </p>
		<img src='../".$photo."' style='width: 150px; height: 150px;'/><input type='hidden' id='image' value='".$photo."' />
		</div>
		</div>
		<div class='clear'></div>
		
		<div style='clear: both; padding-top:15px;'>
		<label class='conf_title'>Actif</label>
		<div class='margin-form'>
		";
		
		if($actif == '1' || $actif == '')
		{
		
			$this->_html .=
			"
			<input type='radio' name='actif' checked value='1'>Oui
			<input type='radio' name='actif' value='0'>Non
			";
		}
		else
		{
			$this->_html .=
			"
			<input type='radio' name='actif' value='1'>Oui
			<input type='radio' name='actif' checked value='0'>Non
			";
		}
		$this->_html .=
		"
		<sup>*</sup>										</div>
		</div>
		<div class='clear'></div>
		";
		
		if(isset($_GET['id_actualite']) && $_GET['id_actualite'] != NULL)
		{
			//mode update
			$id = htmlentities($_GET['id_actualite'],ENT_QUOTES,'UTF-8');
			$this->_html .= "<input type='hidden' name='id_actualite' value='".$id."'/>";
		}
		
		$this->_html .=
		"
		<div class='margin-form'>
		<input type='submit' value='Enregistrer' class='button'/>
		</div>
		<div class='small'><sup>*</sup> Champ requis</div>
		
		</fieldset>
		</form>
		";
		
		
		return $this->_html;
		
		return parent::renderForm();
	}
}