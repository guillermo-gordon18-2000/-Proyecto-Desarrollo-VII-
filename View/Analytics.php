<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Prototipo</title>
     <!-- MATERIAL ICONS -->
     <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
     <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <!-- STYLESHEET -->
      <link rel="stylesheet" href="Public/css/style-Main.css">


</head>


<body>
      <div class="container" >
        <aside >
           <div class="top">
                 <div class="logo">
                     <img src="Public/images/images-12/logo.png" >
                     <h2 > T<span class="danger">WSB</span></h2>
                 </div>
                  
                 <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                 </div>

           </div>
               <div class="sidebar">
                    <a href="?op=dash" >
                        <span class="material-icons-sharp" >grid_view</span>
                         <h3>Dashoard</h3>
                      </a>
                        

                        

                        <a href="#" class="active"  >
                            <span class="material-icons-sharp" class="BtnAnalit">insights</span>
                             <h3>Analytics</h3>
                        </a>

                       


                        <a href="?op=report" id="BtReport">
                            <span class="material-icons-sharp" class="BtnReport">report_gmailerrorred</span>
                             <h3>Report</h3>
                        </a>


                        <a href="?op=Setting" id="BtnSettings" >
                            <span class="material-icons-sharp" class="BtnSettings">settings</span>
                             <h3>Settings</h3>
                        </a>

                      

                      

                        <a href="?op=Logg">
                            <span class="material-icons-sharp">logout</span>
                             <h3>Logg out</h3>
                        </a>
                       
                    
               </div>
        </aside> 
       

        




        <!----------------------- END OF ASIDE ------------------->
             <main>   <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
           
              <h1>ANALITICAS</h1>
              <div class="date">
                <input type="date">

              </div>
           <div class =insights>   
                <div class="card">
                  <div class="head">
                    <div>
                      <h2>235</h2>
                      <p>Educadores</p>
                    </div>
                    <i class='bx bx-trending-up icon' ></i>
                  </div>
                  <div  class="progress"  >
                 
                    <div class="progress-done" data-done="40" ></div>
                   
                  </div>
                
                </div>
                
                <div class="card">
                  <div class="head">
                    <div>
                      <h2>235</h2>
                      <p>Estudiante</p>
                    </div>
                    <i class='bx bx-trending-up icon' ></i>
                  </div>
                  <div  class="progress"  >
                  <div class="progress-done" data-done="70" ></div>
                  </div>
                
                </div>
                
                <div class="card">
                  <div class="head">
                    <div>
                      <h2>235</h2>
                      <p>Visitantes</p>
                    </div>
                    <i class='bx bx-trending-up icon' ></i>
                  </div>
                  <div id="progress" class="progress" >
                  <div class="progress-done" data-done="70" ></div>
                  </div>
                 
                </div>
                       
                        

            </div class="card">   
              <div id="chart" class="recent-order" > 
                <script> var options = {
                    series: [{
                    name: 'DELL',
                    data: [10, 29, 35, 51, 42, 20, 10]
                  }, {
                    name: 'Huawei',
                    data: [11, 25, 30, 40, 36, 10, 5]
                  },{
                    name: 'Samsung',
                    data: [13, 35, 45, 78, 12, 6, 2]
                  },{
                    name: 'Copa',
                    data: [14, 25, 30, 35, 30, 10, 5]
                  }],
                    chart: {
                    height: 400,
                    weight: 450 ,
                    type: 'area'
                  },
                  dataLabels: {
                    enabled: false
                  },
                  stroke: {
                    curve: 'smooth'
                  },
                  xaxis: {
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                  },
                  tooltip: {
                    x: {
                      format: 'dd/MM/yy HH:mm'
                    },
                  },
                  };
                  
                  var chart = new ApexCharts(document.querySelector("#chart"), options);   
                  chart.render();</script>

             </div>    
           
                     
                   
                      <!----------------------- END OF EXPENSES ------------------->
                      
                 <!----------------------- END OF INSIGHTS ------------------->
                 <!--       <div class="recent-order">
                         <h2>Recent Orders</h2>
                           <table>
                              <thead>
                                <tr>
                                    <th>Autores</th>
                                    <th>#conferencia</th>
                                    <th>Conferencia</th>
                                    <th>Estado</th>
                                  
                                    <th>Descripcion</th>
                                </tr>
                              </thead>
                                    <tbody>
                                       <tr>
                                             <td> Foldable Mini Drone</td>
                                             <td>85631</td>
                                             <td>Due</td>
                                             <td class="warning">Pending</td>
                                             <td class="primary">Details</td>
                                        </tr>  
                                       
                                    </tbody>
                           </table>
                        
                                   <a href="#">Show All</a>
                       </div>-->
           
             </main>
<!-------------------------------- END OF MAIN ------------------->
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                            <span class="material-icons-sharp">menu</span>
                    </button>
                     <div class="theme-toggler">
                        <span class="material-icons-sharp active" >light_mode</span>
                        <span class="material-icons-sharp">dark_mode</span>
                     </div>
                     <div class="profile">
                        <div class="info">
                            <p> Hey ,<b> Karian</b></p>

                            <small class="text-muted">Admin</small>

                        </div>

                         <div class="profile-photo">
                            <img src="Public/images/images-12/profile-1.jpg" >
                         </div>
                     </div>
                </div>
<!-------------------------------- END OF TOP ------------------->
<!--  
                       <div class="recent-updates">
                           <h2>Recent Updates</h2>
                           <div class="updates">

                            <div class="update">
                            <div class="profile-photo">
                                 <img src="./images/profile-2.jpg" alt="">
                            </div>
                            <div class="message">
                                <p><b>Muke Tyson</b> received his order of nation</p>
                                  <small class="text-muted">2 minutes ago </small>
                            </div>
                            </div>

                            <div class="update">
                                <div class="profile-photo">
                                     <img src="./images/profile-3.jpg" alt="">
                                </div>
                                <div class="message">
                                    <p><b>Muke Tyson</b> received his order of nation</p>
                                      <small class="text-muted">2 minutes ago </small>
                                </div>
                                </div>

                                <div class="update">
                                    <div class="profile-photo">
                                         <img src="./images/profile-4.jpg" alt="">
                                    </div>
                                    <div class="message">
                                        <p><b>Muke Tyson</b> received his order of nation</p>
                                          <small class="text-muted">2 minutes ago </small>
                                    </div>
                                </div>
                           </div>
                       </div>
                       -->
          <!-------------------------------- END OF UPDATE ------------------->
                        <div class="sales-analytics">
                            <h2>ANALITICA CONFERENCA</h2>
                            <div class="item online">
                               
                                <div id="chart-colm" >
                                       <script>
                                        var options = {
          series: [{
          name: 'Hombres',
          data: [44, 55, 41, 37, 10]
        },  {
          name: 'Mujeres',
          data: [9, 7, 5, 35, 6 ]
        }],
          chart: {
          type: 'bar',
          height: 540,
          stacked: true,
          dropShadow: {
            enabled: true,
            blur: 1,
            opacity: 0.25
          }
        },
        plotOptions: {
          bar: {
            horizontal: true,
            barHeight: '60%',
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 2,
        },
        title: {
          text: ''
        },
        xaxis: {
          categories: ["Dell", "Huawei", "Dell", "Samsung", "COPA"],
        },
        yaxis: {
          title: {
            text: undefined
          },
        },
        tooltip: {
          shared: false,
          y: {
            formatter: function (val) {
              return val + ""
            }
          }
        },
        fill: {
          type: 'pattern',
          opacity: 1,
          pattern: {
            style: ['circles', 'slantedLines', 'verticalLines', 'horizontalLines'], // string or array of strings
        
          }
        },
        states: {
          hover: {
            filter: 'none'
          }
        },
        legend: {
          position: 'right',
          offsetY: 40
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart-colm"), options);
        chart.render();

                                       </script>
                                </div>
                            </div>

                            <div class="item offline">
                                <div class="icon">
                                    <span class="material-icons-sharp">local_mall</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3>HUAWEI</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                       </div>
                                       <h5 class="danger">-39%</h5>
                                       <h3>3849</h3>
                                </div>
                            </div>

                            <div class="item customers">
                                <div class="icon">
                                    <span class="material-icons-sharp">person</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3>SAMSUNG</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                       </div>
                                       <h5 class="success">+25%</h5>
                                       <h3>835</h3>
                                </div>
                            </div>

                            <div class="item online">
                                <div class="icon">
                                    <span class="material-icons-sharp">shopping_cart</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3>COPA</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                       </div>
                                       <h5 class="success">+39%</h5>
                                       <h3>3849</h3>
                                </div>
                            </div>

                              <div class="item add-product">
                                   <div>
                                    <span class="material-icons-sharp">add</span>
                                    <h3>Add Product</h3>
                                   </div>
                              </div>

                   </div>
            </div>
      </div>
    <!--     <script src="Public/js/orders.js"></script> -->
    
   

  
     <script src="Public/js/index.js"></script>

       


</body>
</html>