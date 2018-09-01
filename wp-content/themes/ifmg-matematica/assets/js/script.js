$(document).ready(function() {

    if($("#login").hasClass("form-signin")){
        $("#footer").remove()
    }



    $(".btn-collapse").on("click", function(){
        var target = $(this).data("target");
        if($(target).hasClass("show")){
            $(target).removeClass("show");
            $(this).addClass("toggle-icon");
            
        } else{
            $(target).addClass("show");
            $(this).removeClass("toggle-icon");
        }
        
        
    });

    /** Gráficos **/
    
    if($('body').hasClass('home')){
        /* Vendas */
        var ctx = document.getElementById("vendasChart");
        var vendasChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho"],
                datasets: [{
                    label: '# of Votes',
                    data: [250, 200, 450, 400, 390, 520],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });

        /* Gastos */
        var ctx = document.getElementById("gastosChart");
        var gastosChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho"],
                datasets: [{
                    label: '# of Votes',
                    data: [120, 190, 300, 500, 200, 350],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });

        /* Gastos vs. Vendas */
        var ctx = document.getElementById("vendasVsGastosChart");
        var vendasVsGastosChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho"],
                datasets: [
                    {
                        label: 'Vendas',
                        data: [250, 200, 450, 400, 390, 520],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    },
                    {
                    label: 'Gastos',
                    data: [120, 190, 300, 500, 200, 350],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:false
                        },
                        
                    }]
                }
            }
        });
    }
    /** Fim - Gráficos **/


    /** Calendário **/
    $('#calendarHome').fullCalendar({
        defaultView: 'month',
        locale: 'pt',
    
        header: {
          center: 'addEventButton'
        },
    
        customButtons: {
          addEventButton: {
            text: 'Adicionar evento...',
            click: function() {
              var dateStr = prompt('Entre com uma data do tipo YYYY-MM-DD');
              var eventoNome = prompt('Digite o nome do evento');
              var date = moment(dateStr);
    
              if (date.isValid()) {
                $('#calendarHome').fullCalendar('renderEvent', {
                  title: eventoNome,
                  start: date,
                  allDay: true
                });
                alert('Ótimo! Agora vamos atualizar o seu banco de dados...');
              } else {
                alert('Data inválida.');
              }
            }
          }
        }
    });

    $('#gestaoUsuario').DataTable( {
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        } ]
    });


});



