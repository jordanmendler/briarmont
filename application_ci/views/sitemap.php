<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= base_url();?></loc> 
        <priority>1.0</priority>
    </url>
<?php $data = array('divisions','divisions/veloz-ventures','divisions/veloz-innovations',
                     'solutions', 'divisions/veloz-global', 'divisions/veloz-industries',
					  'portfolio','about','executive-team', 'team-of-innovators', 'innovation-center',
                        'social-media', 'foundation', 'contact' );
//'jobs', 'internships',
?>
					
    <?php foreach($data as $url) { ?>
    <url>
        <loc><?= base_url().$url ?></loc>
        <priority>1.0</priority>
    </url>
    <?php } ?>
 </urlset>