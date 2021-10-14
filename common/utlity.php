<?php
    function paginarion($number,$page,$addition){
        if($number>1){     
           echo  '<nav aria-label="...">';
                echo '<ul class="pagination">';
                        if($page>1){
                            echo '<li class="page-item">
                                        <a class="page-link" href="?page='.($page-1).$addition.'">Previous</a>
                                    </li>';
                        }
                    $avaiablePage = [1,$page-1,$page,$page+1,$number];
                    $isfirst = $isLast = false;
                      for($i=0;$i<$number;$i++){
                          if(!in_array($i+1,$avaiablePage)){
                              if(!$isfirst && $page >3){
                                echo ' <li class="page-item">
                                            <a class="page-link" href="?page='.($page-2).$addition.'">...</a>
                                        </li>';
                                        $isfirst = true;
                              }
                               if(!$isLast && $i > $page){
                                   echo ' <li class="page-item">
                                            <a class="page-link" href="?page='.($page+2).$addition.'">...</a>
                                            </li>';
                                            $isLast = true;
                               }
                              continue;
                          }
                            if($page==($i+1)){
                                echo '  <li class="page-item active">
                                            <a class="page-link" href="#">'.($i+1).'</a>
                                        </li>';
                                 }
                            else{
                                echo '  <li class="page-item">
                                            <a class="page-link" href="?page='.($i+1).$addition.'">'.($i+1).'</a>
                                        </li>';
                                    }
                            
                      }
                        if($page<($number)){
                            echo '<li class="page-item">
                                        <a class="page-link" href="?page='.($page+1).$addition.'">Next</a>
                                    </li>';
                        }
                echo '</ul>';
            echo '</nav>';                     
                 }
    }