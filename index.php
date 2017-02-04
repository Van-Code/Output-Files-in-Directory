<htmL>
    <body>
        <div>                    
            <?php

            if (isset ( $_GET['id'] )) {

                $getID = $_GET['id'];
                function fileExistsSingle($file){
                    if (file_exists($file) === TRUE) {
                        return $file;
                    }
                    $lowerfile = strtolower($file);
                    $dir = 'views/job-openings/fremont';
                    foreach (glob($dir.'/*') as $file) {
                        $base = basename($file, '.html');
                        if (strtolower($base) === $lowerfile) {
                            return $base;
                        }
                    }
                    return FALSE;
                }

                if(fileExistsSingle($getID)!= FALSE){
                    $url = 'views/job-openings/fremont/'.fileExistsSingle($getID).'.html';
                    include $url;
                    echo '<a href="mailto:your@yemail.com" class="button bg-teal txt-white border-teal">Apply for this job</a>';
                    echo '<a href="../jobs/" class="button bg-white txt-teal border-white">View All Openings</a>';
                }else{
                    echo '<div class="job-not-found">Oops! That job id does not exist or has been filled. Please see our other openings below.</div>';
                    include 'views/job-openings/landing.php';

                }
            }else{
                include 'views/job-openings/landing.php';
            }
            ?>

        </div>

    </body>
    </html>