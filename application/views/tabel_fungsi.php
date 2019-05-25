<!--<div class="row mt">-->

              <div class="col-lg-12">
              <div class="content-panel">
                <h3 align="center">Fungsi Aktivasi: min(x_max,max(0,xi))</h3>
                <?php 
                  
                    echo '<table class="table">';
                      echo '<thead>';
                        echo '<tr>';
                          echo '<th>X</th>';
                          for ($i=0; $i < count($data_step_fungsi); $i++) { 
                            echo "<th>x_max: ".$data_step_fungsi[$i+1]."</th>";
                          }
                          
                        echo '</tr>';
                      echo '</thead>';
                      echo '<tbody>';
                        
                        for ($i=0; $i < count($data2[1]) ; $i++) { 
                          echo "<tr>";
                          echo "<td>X".($i+1)."</td>";
                          for ($j=0; $j < count($data_step_fungsi) ; $j++) { 
                            echo "<td>min(".$data_step_fungsi[$j+1].",max(0,".$data_step_hasil[$j+1][$i+1].")) = ".$data2[$j+1][$i]."</td>";
                          }
                          
                          echo "</th>";
                        }
                      echo '</tbody>';
                    echo '</table>';
                  
                ?>
                
              </div>
            </div>
          <!--</div>-->