<!--<div class="row mt">-->

              <div class="col-lg-12">
              <div class="content-panel">
                <h3 align="center">Perhitungan (Value)</h3>
                <?php 
                  
                    echo '<table class="table">';
                      echo '<thead>';
                        echo '<tr>';
                          echo '<th>X</th>';
                          for ($i=0; $i < count($data_step_value); $i++) { 
                            echo "<th>Sigma iterasi ".($i+1)."</th>";
                          }
                          
                        echo '</tr>';
                      echo '</thead>';
                      echo '<tbody>';
                        
                        for ($i=0; $i < count($data2[1]) ; $i++) { 
                          echo "<tr>";
                          echo "<td>X".($i+1)."</td>";
                          for ($j=0; $j < count($data_step_value) ; $j++) { 
                            echo "<td>".$data_step_value[$j+1][$i+1]."</td>";
                          }
                          echo "</th>";
                        }
                      echo '</tbody>';
                    echo '</table>';
                  
                ?>
                
              </div>
            </div>
          <!--</div>-->