<div id="breadcrumb">
<?php
    echo '<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
        echo '<a href="'. get_site_url().'" itemprop="url">';
            echo '<span itemprop="title">'; 
                echo 'Trang Chủ';
            echo '</span>';
        echo '</a> › ';           
        $queried_object = get_queried_object();
        if(is_page()){
            echo '<span itemprop="title">'.$queried_object->post_title.'</span>';     
        }
        if(is_single()){
            if ($queried_object->post_type == 'article'){
                echo '<a href="'.  get_permalink(PID_ARTICLES).'" itemprop="url">';
                    echo '<span itemprop="title">'; 
                        echo 'Bài Viết';
                    echo '</span>';
                echo '</a> › ';      
            }
			else if($queried_object->post_type == 'service'){
                echo '<a href="'.  get_permalink(PID_SERVICES).'" itemprop="url">';
                    echo '<span itemprop="title">'; 
                        echo 'Dịch Vụ';
                    echo '</span>';
                echo '</a> › ';      
            }
            // last level
            echo '<span itemprop="title">'.$queried_object->post_title.'</span>';     
        }
        if(is_tax()){            
            if($queried_object->taxonomy=='article-category'){
                echo '<a href="'.  get_permalink(PID_ARTICLES).'" itemprop="url">';
                    echo '<span itemprop="title">'; 
                        echo 'Kiến Thức';
                    echo '</span>';
                echo '</a> › ';    
            }else if($queried_object->taxonomy=='service-category'){
                echo '<a href="'.  get_permalink(PID_SERVICES).'" itemprop="url">';
                    echo '<span itemprop="title">'; 
                        echo 'Dịch Vụ';
                    echo '</span>';
                echo '</a> › ';    
            }
            echo '<span itemprop="title">'.$queried_object->name.'</span>';     
        }       
    echo '</div>';
?>
</div>