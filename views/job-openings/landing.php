 <h3 class="careers-title">Open Positions</h3>        
    <div class="job-landing" style="text-align: left">
      <p><span style="font-size:20px">We're Hiring!</span></p>

        <br>
        <p><strong>We are currently recruiting for:</strong></p>

         <?php
            $files = glob('views/job-openings/fremont/*.{html}', GLOB_BRACE);
            foreach($files as $file){
                $fileName = basename($file,'.html');
                $displayName = preg_replace(array('/-/', '/_/'), array(' ', '-'), $fileName);
                echo '<p><a class="pos_title_list" href="?id='.strtolower($fileName).'">'.$displayName.' (Brisbane, CA)</a></p>';
            }
        ?>

    </div>