/*var vec = ""
var vector = []
$(document).ready(function(){
  $( "form" ).submit(function( event ) {
      var VecData = ( $( this ).serializeArray() );
      vec = VecData[0].value;
      console.log(vec);
      vector = vec.split(',');
      console.log(vector)
      event.preventDefault();
      location.reload();
    });
});
*/
var temp_x = []
function sigma(x,c,r,i){
    var r1 = r[0]
    var r2 = r[1]
    var c1 = c[0]
    var c2 = c[1]

    var temp1 = 0
    var temp2 = 0
    var temp3 = 0

    for(var k = (-1*r1); k<r1+1; k++)
    {
        if(i+k <=0 || i+k>=x.length)
            continue;
        else
            //print(i+k,"ini 1")
            //print(i+k)
            temp1 += x[i+k-1]
    }   
    for(var k = (-1*r2); k<(-1*r1); k++)
    {
        if(i+k <=0 || i+k>=x.length)
            continue;
        else
            //print(i+k,"ini 1")
            //print(i+k)
            temp2 += x[i+k-1]
    }  
    for(var k = (r1+1); k<(r2+1); k++)
    {
        if(i+k <=0 || i+k>=x.length)
            continue;
        else
            //print(i+k,"ini 1")
            //print(i+k)
            temp3 += x[i+k-1]
    }
    //console.log("satu: ",c1*temp1)
    //console.log("dua: ",c2*temp2)
    //console.log("tiga: ",c2*temp3)
    return c1*temp1 + c2*temp2 + c2*temp3
}
    
function compute(x,c,r){
    var n = x.length;
    var x_i = []
    var x_max = 0
    for (var i = 0; i < n; i++) {
        x_i.push(Math.round(sigma(x,c,r,i+1) * 100) / 100)
    }
    
    x_max = Math.max(x_i)
    for(var i = 0; i<n; i++)
    {
        x_i[i] = Math.min((x_max,Math.max(0,x_i[i])))
    }
    //console.log(x_i)
    return x_i

}
    
function mexican_hat(x,c,r,t)
{
    //print("const: ",const)
    //print("input x: ",x)
    //compute(x,c,r)
    
    console.log("\nX AWAL: : ",x,"\n\n")
    //print("time: ",t,"\n\n")
    var count = 0;
    for (i in t)
    {
        //console.log("ITERASI: ",parseInt(i)+1);
        //console.log(t.length);
        x = compute(x,c,r)
        temp_x[count] = x
        console.log("temp ",count,": ",x)
        count++
        //x = compute(x,c,r)
        //print(x,"\n")
    }
    console.log("temp_x: ",temp_x);
}
    
var Script = function () {



//    selection chart

    $(function () {
        //var vector  = [0,0.5, 0.8, 1, 0.8, 0.5,0]; // input

        var vector = document.getElementsByTagName("H4")[0].getAttribute("value");
        vector = vector.split(",");
        for (var i = 0; i < vector.length; i++) {
            vector[i] = parseFloat(vector[i]);
        }
        var konstanta = document.getElementsByTagName("H4")[0].getAttribute("const");
        
        //console.log(parseFloat(konstanta));
        konstanta = konstanta.split(",");
        for (var i = 0; i < konstanta.length; i++) {
            konstanta[i] = parseFloat(konstanta[i]);
        }
        var rad = document.getElementsByTagName("H4")[0].getAttribute("rad");
        
        rad = rad.split(",");
        for (var i = 0; i < rad.length; i++) {
            rad[i] = parseInt(rad[i]);
        }       
        var tmax = document.getElementsByTagName("H4")[0].getAttribute("tmax");
        
        tmax = tmax.split(",");
        for (var i = 0; i < tmax.length; i++) {
            tmax[i] = parseInt(tmax[i]);
        }

        //var konstanta = [0.6, -0.4]; // konstanta / C
        //var rad = [1,2]; // radius
        //var tmax = [0,1,2] // t = 1 2 3
        
        mexican_hat(vector, konstanta, rad, tmax);

        document.getElementById("vector").innerHTML = "Vector: ["+vector.join()+"]";
        
        
        data = [];
        for (var i = 0; i < 1; i++) {
            var tes = [];
            for (var j = 1; j <= vector.length; j++) {
                tes.push([j, vector[j-1]]);
                
            }
            data[i] = {
                label: "t = "+i,
                data: tes
            };
        }
        for (var i = 1; i <= tmax.length; i++) {
            var tes = [];
            for (var j = 1; j <= temp_x[0].length; j++) {
                tes.push([j, temp_x[i-1][j-1]]);
                
            }
            //console.log(tes);
            data[i] = {
                label: "t = "+i,
                data: tes
            };
        }
        console.log(data);
        var options = {
            series: {
                lines: { show: true },
                points: { show: true }
            },
            legend: { noColumns: 2 },
            xaxis: { tickDecimals: 0 },
            yaxis: { min: 0 },
            selection: { mode: "x" }
        };

        var placeholder = $("#chart-2");

        placeholder.bind("plotselected", function (event, ranges) {
            $("#selection").text(ranges.xaxis.from.toFixed(1) + " to " + ranges.xaxis.to.toFixed(1));

            var zoom = $("#zoom").attr("checked");
            if (zoom)
                plot = $.plot(placeholder, data,
                    $.extend(true, {}, options, {
                        xaxis: { min: ranges.xaxis.from, max: ranges.xaxis.to }
                    }));
        });

        placeholder.bind("plotunselected", function (event) {
            $("#selection").text("");
        });

        var plot = $.plot(placeholder, data, options);

        $("#clearSelection").click(function () {
            plot.clearSelection();
        });

        $("#setSelection").click(function () {
            plot.setSelection({ xaxis: { from: 1994, to: 1995 } });
        });
    });    
}();