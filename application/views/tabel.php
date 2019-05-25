<!--<div class="row mt">-->

              <div class="col-lg-6">
              <div class="content-panel">
                <h3 align="center">List Vector</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th>iterasi</th>
                      <?php  
                      for ($i=0; $i < count($data2[0]) ; $i++) { 
                        echo "<th>".($i+1)."</th>";
                      }
                      ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    for ($i=0; $i < count($data2) ; $i++) { 
                      echo "<tr>";
                      echo "<td>".($i)."</td>";  
                      for ($j=0; $j < count($data2[0]) ; $j++) { 
                        echo "<td>".$data2[$i][$j]."</td>";  
                      }
                      echo "</th>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          <!--</div>-->