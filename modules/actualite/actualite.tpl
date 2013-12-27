<!-- Block actualite -->
<script type="text/javascript">
    $(document).ready(function() {
            $("#carousel-actu").owlCarousel({
                    singleItem:true,
                    paginationNumbers: true,
                    autoPlay : true,
            });
    });
</script>
<div id="carousel-actu" class="owl-carousel">
    {foreach from=$records item=entry}
        <a href="{$entry->lien}" onclick="window.open(href);return false;"><img src="{$entry->photo}" alt="{$entry->titre}" style="width:{$entry->largeur}; height:{$entry->hauteur};" />
            <h3 style="font-size : 13px;">{$entry->titre}</h3>
            <p>{$entry->description}</p>
        </a>
    {/foreach}
</div>

<!-- /Block actualite -->