<?php
/**
 * Template part for hero
 *
 */

?>

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
                <?php if ( get_field('wypadek_poj_tytul_strony') ) : ?>
                <h1><?php echo get_field('wypadek_poj_tytul_strony'); ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php if ( get_field('field_name') ) : ?>
<section class="hero-content">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php echo get_field('wypadek_poj_opis_pod_tytulem'); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>






<section class="wypadek-content">
    <div class="container">
        <div class="row section-content">
            <div class="col-lg-7 text-left">
                <h2>Komu przysługuje odszkodowanie za wypadek w pracy w UK?</h2>
                <p class="bold">Warto pamiętać, że w takim przypadku obcokrajowca obowiązują takie same prawa jak
                    Anglika. Każda osoba poszkodowana w wyniku wypadku w pracy w UK ma prawo do należnej rekompensaty.
                </p>

                <p>
                    Należy jednak pamiętać o dopełnieniu wszelkich formalności oraz dopilnowaniu terminu – osoba
                    poszkodowana ma zazwyczaj 3 lata na zgłoszenie roszczeń i wszczęcie postępowania. Skontaktuj
                    się z nami jeśli chciałbyś starać się odszkodowanie pod numerem: 0161 791 4669.</p>

                <p>
                    Rekompensata ta należy się zarówno w przypadku trwałej niepełnosprawności, jak i w przypadku
                    tymczasowych bóli, a także strat finansowych. Należy przy tym zaznaczyć, że odszkodowania
                    za wypadek w pracy w UK to nie przysługują osobom, które ponoszą odpowiedzialność za dane zdarzenie
                    np
                    gdy potknęliśmy się na prostej drodze lub upuściliśmy sobie cegłę na nogę. Zawsze rekomendujemy aby
                    skorzystać z naszej porady prawnej, która pomoże ustalić odpowiedzialność
                    na podstawie przepisów prawa. Warto pamiętać, że zdarzają się wypadki w której odpowiedzialność
                    dzieli
                    się proporcjonalnie np 75%/25%.</p>

            </div>

        </div>
    </div>
</section>