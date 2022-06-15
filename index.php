<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>

<style type="text/css">
.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow-y: hidden;
    transition: 1.0s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
}

.overlay a {
    padding: 10px;
    text-decoration: none;
    font-size: 40px;
    color: black;
    display: block;
    transition: 0.3s;
}

.overlay a:hover,
.overlay a:focus {
    color: black;
}

.overlay .closebtn {
    position: absolute;
    top: 10px;
    right: 35px;
    font-size: 70px;
}
</style>


<script>
$(document).ready(function() {

    var myVar = setInterval(myTimer, 1000);

    function myTimer() {
        if ($("#current_warehouse_id").html() == "") {
            // console.log("not ready");
        } else {
            clearInterval(myVar);
            get_and_set_warehouses();

        }
    }

});

function openNav() {
    document.getElementById(
        "myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById(
        "myNav").style.width = "0%";
}

function openNav() {
    document.getElementById(
        "myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById(
        "myNav").style.height = "0%";
}
$(document).on('change', '.enter_warehouse', function() {

    var warehouse_id = $(this).find(":selected").val();
    var warehouse_name = $('option:selected', this).attr('dir').replace(/entername_/, '');
    // alert(warehouse_name);
    localStorage.setItem('warehouse_id', warehouse_id);
    localStorage.setItem('warehouse_name', warehouse_name);
    // alert("Set to this - " + localStorage.getItem('warehouse_name'));
    window.location.href = base_url;

});

function get_and_set_warehouses() {


    var company_id = localStorage.getItem('company_id');
    var user_id = localStorage.getItem('user_id');
    var warehouse_id;
    var warehouse_name;

    $.ajax({

                type: "POST",
                dataType: "json",
                headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                url: api_path + "wms/list_warehouses_user_connected",
                data: {
                    "company_id": company_id,
                    "user_id": user_id
                },
                timeout: 60000,

                success: function(response) {

                    console.log(response.data);
                    var ware_id = localStorage.getItem('warehouse_id');
                    var ware_name = localStorage.getItem('warehouse_name');

                    if (response.status == '200') {

                        // if (ware_id) {

                        // var all_ware = `<option  id="enter_ware_${ware_id}" dir="entername_${ware_name}"
                        //                 value='${ware_id}'>${ware_name}</option>`
                        //                 $.each(response['data'], function(i, v) {

                        //                     console.log(`"<option  id="enter_ware_${response['data'][i]['warehouse_id']}" dir="entername_${response['data'][i]['warehouse_name']}"
                        //                      value='${response['data'][i]['warehouse_id']}'>${response['data'][i]['warehouse_name']}</option>"`)

                        //                      console.log(`"<option  id="enter_ware_${ware_id}" dir="entername_${ware_name}"
                        //                  value='${ware_id}'>${ware_name}</option>"`)
                                            
                        //                     if((`<option  id="enter_ware_${response['data'][i]['warehouse_id']}" dir="entername_${response['data'][i]['warehouse_name']}"
                        //                      value='${response['data'][i]['warehouse_id']}'>${response['data'][i]['warehouse_name']}</option>`) == `<option  id="enter_ware_${ware_id}" dir="entername_${ware_name}"
                        //                  value='${ware_id}'>${ware_name}</option>`){
                        //                     alert('wrong');
                        //                 }
                        //                     opt += `<option  id="enter_ware_${response['data'][i]['warehouse_id']}" dir="entername_${response['data'][i]['warehouse_name']}"
                        //                     value='${response['data'][i]['warehouse_id']}'>${response['data'][i]['warehouse_name']}</option>`

                        //                 })
                        //         }

                                    if (response.total_warehouses == 0) {

                                        // $('#switch_tab').hide();
                                        // alert('hide');

                                        

                                    } else if (response.total_warehouses > 0) {
                                        var ware_id = localStorage.getItem('warehouse_id');
                                        var ware_name = localStorage.getItem('warehouse_name');


                                        var opt = `${ware_name && ware_id ? `<option  id="enter_ware_${ware_id}" dir="entername_${ware_name}"
                                        value='${ware_id}'>${ware_name}</option>` : ''}`;




                                        $.each(response['data'], function(i, v) {


                                            warehouse_id = response['data'][i]['warehouse_id'];
                                            warehouse_name = response['data'][i]['warehouse_name'];

                                            if(warehouse_id != ware_id){
                                                
                                            opt +=`<option  id="enter_ware_${response['data'][i]['warehouse_id']}" dir="entername_${response['data'][i]['warehouse_name']}"
                                            value='${response['data'][i]['warehouse_id']}'>${response['data'][i]['warehouse_name']}</option>`

                                            }


                                            

                                        });
                                        // alert('show');
                                        // $('#switch_tab').show();
                                        $("#switch_warehouse").append(opt);

                                    }

                                    if (localStorage.getItem('warehouse_id') == null || localStorage.getItem(
                                            'warehouse_id') ==
                                        "" || localStorage.getItem('warehouse_id') == 'undefined') {

                                        localStorage.setItem('warehouse_id', warehouse_id);
                                        localStorage.setItem('warehouse_name', warehouse_name);

                                    }

                                    if (localStorage.getItem('warehouse_id')) {

                                        defCalls(localStorage.getItem('warehouse_id')); //returns the promise object

                                    } else {

                                        // alert("No warehouse found");
                                        // window.location.href = "";

                                    }



                                } else {

                                }

                            },
                            // objAJAXRequest, strError
                            error: function(response) {

                                alert('Error fetching warehouses!');

                            }

                    });
            }



            function load_transac_graph(warehouse_id) {

                var company_id = localStorage.getItem('company_id');

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                    url: api_path + "wms/monthly_transactions_rpt",
                    data: {
                        "company_id": company_id,
                        "warehouse_id": warehouse_id
                    },
                    timeout: 60000,

                    success: function(response) {

                        console.log(response);

                        if (response.status == '200') {

                            console.log(response);

                            if (response.data.list.length != 0) {

                                var list_of_names = [];
                                var list_of_exp_values = [];
                                var list_of_rev_values = [];

                                $(response.data.list).each(function(index, value) {
                                    // alert(index)
                                    console.log(value.incoming)
                                    list_of_names.push(value.name);
                                    list_of_exp_values.push({
                                        value: Number(value.incoming),
                                        name: value.name
                                    });
                                    list_of_rev_values.push({
                                        value: Number(value.outgoing),
                                        name: value.name
                                    });

                                });


                                var echartBar = echarts.init(document.getElementById('main_transac'));

                                echartBar.setOption({

                                    title: {

                                    },
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
                                        data: ['Incoming', 'Outgoing']
                                    },
                                    toolbox: {
                                        show: false
                                    },
                                    calculable: false,
                                    xAxis: [{
                                        type: 'category',
                                        data: list_of_names
                                    }],
                                    yAxis: [{
                                        type: 'value'
                                    }],
                                    series: [


                                        {
                                            name: 'Incoming',
                                            type: 'bar',
                                            data: list_of_exp_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        },


                                        {
                                            name: 'Outgoing',
                                            type: 'bar',
                                            data: list_of_rev_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        }

                                    ]

                                });

                            }

                        }

                    },
                    // objAJAXRequest, strError
                    error: function(response) {
                        console.log(response);
                        alert("error");
                    }

                });
            }


            function load_outgoing_graph(warehouse_id) {

                var company_id = localStorage.getItem('company_id');

                $.ajax({

                    type: "POST",
                    headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                    dataType: "json",
                    url: api_path + "wms/monthly_out_transactions_rpt",
                    data: {
                        "company_id": company_id,
                        "warehouse_id": warehouse_id
                    },
                    timeout: 60000,

                    success: function(response) {

                        console.log(response);

                        if (response.status == '200') {

                            console.log(response);

                            if (response.data.list.length != 0) {

                                var list_of_names = [];
                                var list_of_rev_values = [];

                                $(response.data.list).each(function(index, value) {
                                    // alert(index)
                                    console.log(value.outgoing)
                                    list_of_names.push(value.name);
                                    // list_of_exp_values.push({ value: Number(value.incoming), name: value.name});
                                    list_of_rev_values.push({
                                        value: Number(value.outgoing),
                                        name: value.name
                                    });

                                });


                                var echartBar = echarts.init(document.getElementById('main_out_transac'));

                                echartBar.setOption({

                                    title: {

                                    },
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
                                        data: ['Outgoing']
                                    },
                                    toolbox: {
                                        show: false
                                    },
                                    calculable: false,
                                    xAxis: [{
                                        type: 'category',
                                        data: list_of_names
                                    }],
                                    yAxis: [{
                                        type: 'value'
                                    }],
                                    series: [


                                        {
                                            name: 'Outgoing',
                                            type: 'bar',
                                            data: list_of_rev_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        }

                                    ]

                                });

                            }

                        }

                    },
                    // objAJAXRequest, strError
                    error: function(response) {
                        console.log(response);
                        alert("error");
                    }

                });
            }

            function load_incoming_graph(warehouse_id) {

                var company_id = localStorage.getItem('company_id');

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                    url: api_path + "wms/monthly_inc_transactions_rpt",
                    data: {
                        "company_id": company_id,
                        "warehouse_id": warehouse_id
                    },
                    timeout: 60000,

                    success: function(response) {

                        console.log(response);

                        if (response.status == '200') {

                            console.log(response);

                            if (response.data.list.length != 0) {

                                var list_of_names = [];
                                var list_of_exp_values = [];
                                // var list_of_rev_values = [];

                                $(response.data.list).each(function(index, value) {
                                    // alert(index)
                                    console.log(value.incoming)
                                    list_of_names.push(value.name);
                                    list_of_exp_values.push({
                                        value: Number(value.incoming),
                                        name: value.name
                                    });
                                    // list_of_rev_values.push({ value: Number(value.outgoing), name: value.name});

                                });


                                var echartBar = echarts.init(document.getElementById('main_in_transac'));

                                echartBar.setOption({

                                    title: {

                                    },
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
                                        data: ['Incoming']
                                    },
                                    toolbox: {
                                        show: false
                                    },
                                    calculable: false,
                                    xAxis: [{
                                        type: 'category',
                                        data: list_of_names
                                    }],
                                    yAxis: [{
                                        type: 'value'
                                    }],
                                    series: [


                                        {
                                            name: 'Incoming',
                                            type: 'bar',
                                            data: list_of_exp_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        },


                                    ]

                                });

                            }

                        }

                    },
                    // objAJAXRequest, strError
                    error: function(response) {
                        console.log(response);
                        alert("error");
                    }

                });
            }



            // function load_transac_graph(warehouse_id){

            //     var company_id = localStorage.getItem('company_id');       

            //   $.ajax({

            //     type: "POST",
            //     dataType: "json",
            //     url: api_path+"wms/monthly_transactions_rpt",
            //     data: {"company_id": company_id, "warehouse_id": warehouse_id},
            //     timeout: 60000,

            //     success: function(response) {

            //       console.log(response);

            //       if (response.status == '200'){

            //         console.log(response);

            //         if(response.data.list.length != 0){

            //           var list_of_names = [];
            //           var list_of_exp_values = [];
            //           var list_of_rev_values = [];

            //           $(response.data.list).each(function(index, value){
            //             // alert(index)
            //             list_of_names.push( value.name );
            //             list_of_exp_values.push({ value: Number(value.incoming), name: value.name});
            //             list_of_rev_values.push({ value: Number(value.outgoing), name: value.name});

            //           });


            //           var echartBar = echarts.init(document.getElementById('main_transac'));

            //           echartBar.setOption({

            //             title: {

            //             },
            //             tooltip: {
            //               trigger: 'axis'
            //             },
            //             legend: {
            //               data: ['Incoming', 'Outgoing']
            //             },
            //             toolbox: {
            //               show: false
            //             },
            //             calculable: false,
            //             xAxis: [{
            //               type: 'category',
            //               data: list_of_names
            //             }],
            //             yAxis: [{
            //               type: 'value'
            //             }],
            //             series: [


            //               {
            //                 name: 'Incoming',
            //                 type: 'bar',
            //                 data: list_of_exp_values,
            //                 markPoint: {
            //                 data: [{
            //                   type: 'max',
            //                   name: '-'
            //                 }, {
            //                   type: 'min',
            //                   name: '-'
            //                 }]
            //                 },
            //                 markLine: {
            //                 data: [{
            //                   type: 'average',
            //                   name: '-'
            //                 }]
            //                 }
            //               },


            //               {
            //                 name: 'Outgoing',
            //                 type: 'bar',
            //                 data: list_of_rev_values,
            //                 markPoint: {
            //                 data: [{
            //                   type: 'max',
            //                   name: '-'
            //                 }, {
            //                   type: 'min',
            //                   name: '-'
            //                 }]
            //                 },
            //                 markLine: {
            //                 data: [{
            //                   type: 'average',
            //                   name: '-'
            //                 }]
            //                 }
            //               }

            //             ] 

            //           });

            //         }

            //       }   

            //     },
            //     // objAJAXRequest, strError
            //     error: function(response){
            //       console.log(response);
            //       alert("error");                         
            //     }        

            //   });
            // }


            function load_revenue_graph(warehouse_id) {

                var company_id = localStorage.getItem('company_id');

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                    url: api_path + " wms/monthly_grn_rpt",
                    data: {
                        "company_id": company_id,
                        "warehouse_id": warehouse_id
                    },
                    timeout: 60000,

                    success: function(response) {

                        if (response.status == '200') {

                            console.log(response);

                            if (response.data.list.length != 0) {

                                var list_of_names = [];
                                var list_of_exp_values = [];
                                var list_of_rev_values = [];

                                $(response.data.list).each(function(index, value) {
                                    // alert(index)
                                    list_of_names.push(value.name);
                                    list_of_exp_values.push({
                                        value: Number(value.exp_amount),
                                        name: value.name
                                    });
                                    list_of_rev_values.push({
                                        value: Number(value.rev_amount),
                                        name: value.name
                                    });

                                });


                                var echartBar = echarts.init(document.getElementById('main'));

                                echartBar.setOption({

                                    title: {

                                    },
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
                                        data: ['expense', 'revenue']
                                    },
                                    toolbox: {
                                        show: false
                                    },
                                    calculable: false,
                                    xAxis: [{
                                        type: 'category',
                                        data: list_of_names
                                    }],
                                    yAxis: [{
                                        type: 'value'
                                    }],
                                    series: [


                                        {
                                            name: 'expense',
                                            type: 'bar',
                                            data: list_of_exp_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        },


                                        {
                                            name: 'revenue',
                                            type: 'bar',
                                            data: list_of_rev_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        }

                                    ]

                                });

                            }

                        }

                    },
                    // objAJAXRequest, strError
                    error: function(response) {
                        alert("error");
                    }

                });
            }


            function load_incoming__outgoing_graph(warehouse_id) {

                var company_id = localStorage.getItem('company_id');

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                    url: api_path + "wms/monthly_grn_and_inv_rpt",
                    data: {
                        "company_id": company_id,
                        "warehouse_id": warehouse_id
                    },
                    timeout: 60000,

                    success: function(response) {

                        if (response.status == '200') {

                            console.log(response);

                            if (response.data.list.length != 0) {

                                var list_of_names = [];
                                var list_of_exp_values = [];
                                var list_of_rev_values = [];

                                $(response.data.list).each(function(index, value) {
                                    // alert(index)
                                    list_of_names.push(value.name);
                                    list_of_exp_values.push({
                                        value: Number(value.exp_amount),
                                        name: value.name
                                    });
                                    list_of_rev_values.push({
                                        value: Number(value.rev_amount),
                                        name: value.name
                                    });

                                });


                                var echartBar = echarts.init(document.getElementById('main_inc_out'));

                                echartBar.setOption({

                                    title: {

                                    },
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
                                        data: ['incoming', 'outgoing']
                                    },
                                    toolbox: {
                                        show: false
                                    },
                                    calculable: false,
                                    xAxis: [{
                                        type: 'category',
                                        data: list_of_names
                                    }],
                                    yAxis: [{
                                        type: 'value'
                                    }],
                                    series: [


                                        {
                                            name: 'incoming',
                                            type: 'bar',
                                            data: list_of_rev_values,

                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        },


                                        {
                                            name: 'outgoing',
                                            type: 'bar',
                                            data: list_of_exp_values,
                                            
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        }

                                    ]

                                });

                            }

                        }

                    },
                    // objAJAXRequest, strError
                    error: function(response) {
                        alert("error");
                    }

                });
            }


            function load_expenses_graph(warehouse_id) {

                var company_id = localStorage.getItem('company_id');

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                    url: api_path + "wms/monthly_grn_rpt",
                    data: {
                        "company_id": company_id,
                        "warehouse_id": warehouse_id
                    },
                    timeout: 60000,

                    success: function(response) {

                        if (response.status == '200') {

                            console.log(response);

                            if (response.data.list.length != 0) {

                                var list_of_names = [];
                                var list_of_exp_values = [];

                                $(response.data.list).each(function(index, value) {
                                    // alert(index)
                                    list_of_names.push(value.name);
                                    list_of_exp_values.push({
                                        value: Number(value.exp_amount),
                                        name: value.name
                                    });

                                });


                                var echartBar = echarts.init(document.getElementById('main_expenses'));

                                echartBar.setOption({

                                    title: {

                                    },
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
                                        data: ['expense']
                                    },
                                    toolbox: {
                                        show: false
                                    },
                                    calculable: false,
                                    xAxis: [{
                                        type: 'category',
                                        data: list_of_names
                                    }],
                                    yAxis: [{
                                        type: 'value'
                                    }],
                                    series: [


                                        {
                                            name: 'expense',
                                            type: 'bar',
                                            data: list_of_exp_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        },



                                    ]

                                });

                            }

                        }

                    },
                    // objAJAXRequest, strError
                    error: function(response) {
                        alert("error");
                    }

                });
            }



            function load_rev_exp_graph(warehouse_id) {

                var company_id = localStorage.getItem('company_id');

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                    url: api_path + "wms/monthly_grn_and_inv_rpt",
                    data: {
                        "company_id": company_id,
                        "warehouse_id": warehouse_id
                    },
                    timeout: 60000,

                    success: function(response) {

                        if (response.status == '200') {

                            console.log(response);

                            if (response.data.list.length != 0) {

                                var list_of_names = [];
                                var list_of_exp_values = [];
                                var list_of_rev_values = [];

                                $(response.data.list).each(function(index, value) {
                                    // alert(index)
                                    list_of_names.push(value.name);
                                    list_of_exp_values.push({
                                        value: Number(value.exp_amount),
                                        name: value.name
                                    });
                                    list_of_rev_values.push({
                                        value: Number(value.rev_amount),
                                        name: value.name
                                    });

                                });


                                var echartBar = echarts.init(document.getElementById('main'));

                                echartBar.setOption({

                                    title: {

                                    },
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
                                        data: ['expense', 'revenue']
                                    },
                                    toolbox: {
                                        show: false
                                    },
                                    calculable: false,
                                    xAxis: [{
                                        type: 'category',
                                        data: list_of_names
                                    }],
                                    yAxis: [{
                                        type: 'value'
                                    }],
                                    series: [


                                        {
                                            name: 'expense',
                                            type: 'bar',
                                            data: list_of_exp_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        },


                                        {
                                            name: 'revenue',
                                            type: 'bar',
                                            data: list_of_rev_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        }

                                    ]

                                });

                            }

                        }

                    },
                    // objAJAXRequest, strError
                    error: function(response) {
                        alert("error");
                    }

                });
            }


            function load_revenue_graph(warehouse_id) {

                var company_id = localStorage.getItem('company_id');

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                    url: api_path + "wms/monthly_inv_rpt",
                    data: {
                        "company_id": company_id,
                        "warehouse_id": warehouse_id
                    },
                    timeout: 60000,

                    success: function(response) {

                        if (response.status == '200') {

                            console.log(response);

                            if (response.data.list.length != 0) {

                                var list_of_names = [];
                                var list_of_rev_values = [];

                                $(response.data.list).each(function(index, value) {
                                    // alert(index)
                                    list_of_names.push(value.name);
                                    list_of_rev_values.push({
                                        value: Number(value.rev_amount),
                                        name: value.name
                                    });

                                });


                                var echartBar = echarts.init(document.getElementById('main_revenue'));

                                echartBar.setOption({

                                    title: {

                                    },
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
                                        data: ['revenue']
                                    },
                                    toolbox: {
                                        show: false
                                    },
                                    calculable: false,
                                    xAxis: [{
                                        type: 'category',
                                        data: list_of_names
                                    }],
                                    yAxis: [{
                                        type: 'value'
                                    }],
                                    series: [

                                        {
                                            name: 'revenue',
                                            type: 'bar',
                                            data: list_of_rev_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        }

                                    ]

                                });

                            }

                        }

                    },
                    // objAJAXRequest, strError
                    error: function(response) {
                        alert("error");
                    }

                });
            }

            function load_expenses_graph(warehouse_id) {

                var company_id = localStorage.getItem('company_id');

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                    url: api_path + "wms/monthly_grn_and_inv_rpt",
                    data: {
                        "company_id": company_id,
                        "warehouse_id": warehouse_id
                    },
                    timeout: 60000,

                    success: function(response) {

                        if (response.status == '200') {

                            console.log(response);

                            if (response.data.list.length != 0) {

                                var list_of_names = [];
                                var list_of_exp_values = [];
                                var list_of_rev_values = [];

                                $(response.data.list).each(function(index, value) {
                                    // alert(index)
                                    list_of_names.push(value.name);
                                    list_of_exp_values.push({
                                        value: Number(value.exp_amount),
                                        name: value.name
                                    });
                                    list_of_rev_values.push({
                                        value: Number(value.rev_amount),
                                        name: value.name
                                    });

                                });


                                var echartBar = echarts.init(document.getElementById('main_expenses'));

                                echartBar.setOption({

                                    title: {

                                    },
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
                                        data: ['expense', 'revenue']
                                    },
                                    toolbox: {
                                        show: false
                                    },
                                    calculable: false,
                                    xAxis: [{
                                        type: 'category',
                                        data: list_of_names
                                    }],
                                    yAxis: [{
                                        type: 'value'
                                    }],
                                    series: [


                                        {
                                            name: 'expense',
                                            type: 'bar',
                                            data: list_of_exp_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        },


                                        {
                                            name: 'revenue',
                                            type: 'bar',
                                            data: list_of_rev_values,
                                            markPoint: {
                                                data: [{
                                                    type: 'max',
                                                    name: '-'
                                                }, {
                                                    type: 'min',
                                                    name: '-'
                                                }]
                                            },
                                            markLine: {
                                                data: [{
                                                    type: 'average',
                                                    name: '-'
                                                }]
                                            }
                                        }

                                    ]

                                });

                            }

                        }

                    },
                    // objAJAXRequest, strError
                    error: function(response) {
                        alert("error");
                    }

                });
            }



            function load_profit_loss_graph(warehouse_id) {
                var company_id = localStorage.getItem('company_id');
                // var warehouse_id=localStorage.getItem('warehouse_id');

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                    url: api_path + "wms/monthly_grn_and_inv_rpt",
                    data: {
                        "company_id": company_id,
                        "warehouse_id": warehouse_id
                    },
                    timeout: 60000,
                    success: function(response) {
                        if (response.status == '200') {
                            console.log(response);
                            if (response.data.list.length != 0) {
                                var list_of_names = [];
                                var list_of_values = [];
                                $(response.data.list).each(function(index, value) {
                                    // alert(index)
                                    list_of_names.push(value.name);
                                    list_of_values.push({
                                        value: Number(value.profit),
                                        name: value.name
                                    });
                                });
                                // alert(list_of_names);
                                var echartBar = echarts.init(document.getElementById(
                                'yearly_sales_report'));
                                echartBar.setOption({
                                    title: {},
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    legend: {
                                        data: ['sales']
                                    },
                                    toolbox: {
                                        show: false
                                    },
                                    calculable: false,
                                    xAxis: [{
                                        type: 'category',
                                        data: list_of_names
                                    }],
                                    yAxis: [{
                                        type: 'value'
                                    }],
                                    series: [{
                                        name: 'sales',
                                        type: 'bar',
                                        data: list_of_values,
                                        markPoint: {
                                            data: [{
                                                type: 'max',
                                                name: '???'
                                            }, {
                                                type: 'min',
                                                name: '???'
                                            }]
                                        },
                                        markLine: {
                                            data: [{
                                                type: 'average',
                                                name: '???'
                                            }]
                                        }
                                    }]
                                });
                            }
                        }
                    }, // objAJAXRequest, strError
                    error: function(response) {
                        // $("#ddsh_loading_1").hide();
                        alert("error");
                        // $('#employee_details_display').hide();
                        // $('#employee_error_display').show();
                    }

                });

            }



            function load_warehouse_value_pie(warehouse_id) {

                var company_id = localStorage.getItem('company_id');

                $.ajax({
                        type: "POST",
                        headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
                        dataType: "json",
                        url: api_path + "wms/grp_values_of_stock",
                        data: {
                            "company_id": company_id,
                            "warehouse_id": warehouse_id
                        },
                        timeout: 60000,
                        success: function(response) {
                            if (response.status == '200') {
                                console.log(response);
                                if (response.data.warehouse.length != 0) {
                                    var list_of_names = [];
                                    var list_of_values = [];
                                    $(response.data.warehouse).each(function(index, value) {
                                        // alert(index)
                                        list_of_names.push(value.name);
                                        list_of_values.push({
                                            value: Number(value.cost),
                                            name: value.name
                                        });
                                    });
                                    // alert(list_of_values)
                                    var echartPie = echarts.init(document.getElementById('warehouse_pie'));
                                    echartPie.setOption({
                                        tooltip: {
                                            trigger: 'item',
                                            formatter: "{a} <br/>{b} : {c} ({d}%)"
                                        },
                                        legend: {
                                            x: 'center',
                                            y: 'bottom',
                                            data: list_of_names
                                        },
                                        toolbox: {
                                            show: true,
                                            feature: {
                                                magicType: {
                                                    show: true,
                                                    type: ['pie', 'funnel'],
                                                    option: {
                                                        funnel: {
                                                            x: '25%',
                                                            width: '50%',
                                                            funnelAlign: 'left',
                                                            max: 1548
                                                        }
                                                    }
                                                },
                                                restore: {
                                                    show: true,
                                                    title: "Restore"
                                                },
                                                saveAsImage: {
                                                    show: true,
                                                    title: "Save Image"
                                                }
                                            }
                                        },
                                        calculable: true,
                                        series: [{
                                            name: '',
                                            type: 'pie',
                                            radius: '55%',
                                            center: ['50%', '48%'],
                                            data: list_of_values //[{
                                            // value: 335,
                                            // name: 'Ikeja'
                                            //  }, {
                                            // value: 310,
                                            // name: 'Ilupeju'
                                            //  }, {
                                            // value: 234,
                                            // name: 'Union Ad'
                                            //  }, {
                                            // value: 135,
                                            // name: 'Video Ads'
                                            //  }, {
                                            // value: 1548,
                                            // name: 'Search Engine'
                                            //  }]
                                        }]
                                    });
                                    var dataStyle = {
                                        normal: {
                                            label: {
                                                show: false
                                            },
                                            labelLine: {
                                                show: false
                                            }
                                        }
                                    };
                                    var placeHolderStyle = {
                                        normal: {
                                            color: 'rgba(0,0,0,0)',
                                            label: {
                                                show: false
                                            },
                                            labelLine: {
                                                show: false
                                            }
                                        },
                                        emphasis: {
                                            color: 'rgba(0,0,0,0)'
                                        }
                                    };
                                } else {
                                    $("#loader_lgn").hide();
                                    $('#warehouse_pie').html('<strong>No Data Available</strong>');
                                }
                            } else if (response.status == '400') {
                                $("#loader_lgn").hide();
                                $('#warehouse_pie').html(response.msg);
                            }
                        }, // objAJAXRequest, strError
                        error: function(response) {
                            // $("#ddsh_loading_1").hide();
                            $("#loader_lgn").hide();
                            alert("error");
                            // $('#employee_details_display').hide();
                            // $('#employee_error_display').show();
                        }
                    }

                );
            }
</script>



<!-- page content -->

<div class="right_col" role="main" style="display: ">
    <div class="">


        <div class="page-title">

            <div class="title_left" style="display: flex; width:18%; justify-content:space-between">
                <h3 class="versatile">Dashboard </h3>
                <select id="switch_warehouse" class="enter_warehouse"
                    style="border: none; padding:10px; border-radius:5px; box-shadow: 0 4px 8px rgba(0,0,0,0.19); margin-left:20px">

                </select>
                <!-- <span ></span> -->

            </div>
            <!--      <div id="myNav" class="overlay" style="z-index: 10"> 
        <a href="javascript:void(0)"
            class="closebtn" onclick="closeNav()"> 
            × 
        </a> 
        <div class="overlay-content"> 
           
        </div> 
    </div> -->

            <div class="title_right" style="margin-bottom: 35px">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div> -->
                </div>
            </div>

        </div>

        <div class="clearfix"></div>



        <div class="row" id="no_permission_dv" style="display: none">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br>
                        <div class="bs-example" data-example-id="simple-jumbotron">
                            <div class="jumbotron">
                                <div style="font-size: 30px; font-weight: bold">Hello, <span
                                        class="hi_user_name"></span>!</div>
                                <p>Welcome to NaHere Warehouse Management Software (WMS). <font color="red">The WMS
                                        admin needs to give you a role before you can perform any activities on the app.
                                    </font>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row home_dv" id="home_dv" style="display: none">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br>
                        <div class="bs-example" data-example-id="simple-jumbotron">
                            <div class="jumbotron">
                                <div style="font-size: 30px; font-weight: bold">Hello, <span
                                        class="hi_user_name"></span>!</div>
                                        <p>Welcome to NaHere Warehouse Management Software (WMS)
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row" id="admins_no_permission_dv" style="display: none">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br>
                        <div class="bs-example" data-example-id="simple-jumbotron">
                            <div class="jumbotron">
                                <div style="font-size: 30px; font-weight: bold">Hello, <span
                                        class="hi_user_name"></span>!</div>
                                <p>You are admin and need to completely set up your account before accessing more
                                    features on this WMS.</p>
                                <ul style="font-size: 18px">

                                    <!-- <li>
                            <a href="bizprofile"><u>
                              Update Company Details</u> 
                              <span style="color: #339156">
                                <i class="fa " aria-hidden="true" id="updt_comp_dtl"></i>
                              </span>
                            </a>
                          </li> -->

                                    <li>
                                        <a href="warehouses"><u>
                                                Create a Warehouse</u>
                                            <span style="color: #339156">
                                                <i class="fa " aria-hidden="true" id="crt_whs"></i>
                                            </span>
                                        </a>
                                    </li>


                                    <li class="assign" style="display:none;">
                                        <a href="users"><u>
                                                Assign Roles to Yourself or Others</u>
                                            <span style="color: #d96452">
                                                <i class="fa " aria-hidden="true" id="assgn_roles"></i>
                                            </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row dsh_dvs top_tiles">



            <!-- <div class="perm_section" id="">

              </div> -->

            <div id="revenue_dashboard" class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12"
                style="display: none; ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-money"></i></div>
                    <div class="count" id="the_rev">
                        <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                    </div>
                    <h3>Revenue</h3>
                    <p>From Receipts Generated</p>

                </div>
            </div>




            <div id="expense_dashboard" class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12"
                style="display: none; ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-money"></i></div>
                    <div class="count" id="the_expnz">
                        <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                    </div>
                    <h3>Expense</h3>
                    <p>Money Spent</p>
                </div>
            </div>



            <div id="creditors_dashboard" class=" animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12"
                style="display: none; ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-long-arrow-right"></i></div>
                    <!-- <div class="count">₦90.3mil</div> -->
                    <div class="count" id="total_xxs">
                        <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                    </div>
                    <h3>Creditors</h3>
                    <p>We Owe</p>
                </div>
            </div>


            <div id="debtors_dashboard" class="debtors animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12"
                style="display: none; ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-long-arrow-left"></i></div>
                    <!-- <div class="count">₦90.3mil</div> -->
                    <div class="count" id="total_ddds">
                        <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                    </div>
                    <h3>Debtors</h3>
                    <p>We are Owed</p>
                </div>
            </div>

            <a id="items_dashboard" href="items" style="display: none; ">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-list"></i></div>
                        <div class="count" id="total_all_items">
                            <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                        </div>
                        <h3>All Items</h3>
                        <p>Total Items in Warehouse</p>

                    </div>
                </div>
            </a>


            <a id="unique_dashboard" href="items" style="display: none; ">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-cart-plus"></i></div>
                        <div class="count" id="total_unique_items">
                            <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                        </div>
                        <h3>Unique Items</h3>
                        <p>Total Unique Items in Warehouse</p>
                    </div>
                </div>
            </a>


            <!-- <a id="transactions_dashboard" class="unique" href="warehouse_activities?id=" class="" style="display: none; ">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-exchange"></i></div>
                  <div class="count" id="total_transc">
                    <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                  </div>
                  <h3>Transactions</h3>
                  <p>Incoming & Outgoing</p>
                </div>
              </div>
              </a> -->

            <a id="transactions_in_dashboard" class="unique" href="warehouse_activities?id=" class=""
                style="display: none; ">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-angle-double-left"></i></div>
                        <div class="count" id="total_in_transc">
                            <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                        </div>
                        <h3>Transactions</h3>
                        <p>Incoming</p>
                    </div>
                </div>
            </a>

            <a id="transactions_out_dashboard" class="unique" href="warehouse_outgoing?id=" class=""
                style="display: none; ">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-angle-double-right"></i></div>
                        <div class="count" id="total_out_transc">
                            <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                        </div>
                        <h3>Transactions</h3>
                        <p>Outgoing</p>
                    </div>
                </div>
            </a>

            <a id="low_dashboard" href="low_items" class="low" style="display: none; ">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-long-arrow-down"></i></div>
                        <div class="count" id="low_itms">
                            <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                        </div>
                        <h3>Low Items</h3>
                        <p>.</p>
                    </div>
                </div>
            </a>

            <a id="expiry" href="about_to_expire" class="low" style="display:none; ">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-exclamation-circle"></i></div>
                        <div class="count" id="expiry_count">
                            <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                        </div>
                        <h3>About to Expire</h3>
                        <p>.</p>
                    </div>
                </div>
            </a>

            <a id="expired" href="expired" class="low" style="display:none; ">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
                        <div class="count" id="expired_count">
                            <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                        </div>
                        <h3>Expired Items</h3>
                        <p>.</p>
                    </div>
                </div>
            </a>

            <a id="total_overdue_inv" href="total_overdue_inv" class="low" style="display:none; ">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-exclamation"></i></div>
                        <div class="count" id="total_overdue_INV">
                            <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                        </div>
                        <h3>Total Overdue INV</h3>
                        <p>.</p>
                    </div>
                </div>
            </a>

            <a id="total_overdue_po" href="total_overdue_po" class="low" style="display:none; ">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
                        <div class="count" id="total_overdue_PO">
                            <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                        </div>
                        <h3>Total Overdue PO</h3>
                        <p>.</p>
                    </div>
                </div>
            </a>

            <a id="best_selling_items" href="best_selling_items" class="low" style="display:none; ">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-line-chart"></i></div>
                        <div class="count" id="best_selling">
                            <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                        </div>
                        <h3>Best Selling Items</h3>
                        <p>.</p>
                    </div>
                </div>
            </a>

            <a id="lowest_selling_items" href="lowest_selling_items" class="low" style="display:none; ">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-level-down"></i></div>
                        <div class="count" id="lowest_selling">
                            <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                        </div>
                        <h3>Lowest Selling Items</h3>
                        <p>.</p>
                    </div>
                </div>
            </a>


            <!-- <a id="expired_dashboard" href="expired_items" class="expired" style="display: none; ">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
                  <div class="count" id="exp_itms">
                    <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                  </div>
                  <h3>Expired</h3>
                  <p>Items About to Expire or Already Expired</p>
                </div>
              </div>
              </a> -->
            <!-- <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-long-arrow dsh_dvs-up"></i></div>
                  <div class="count">₦50,320</div>
                  <h3>Bills</h3>
                  <p>Pending.</p>
                </div>
              </div> -->
            <!-- <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-line-chart"></i></div>
                  
                  <div class="count" id="total_st_v">
                    <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                  </div>
                  <h3>Value of Stock</h3>
                  <p>Value of Current Items in Warehouse</p>
                </div>
              </div> -->

            <!-- </div> -->






            <div class="" id="transactions_activities" style="display: none;">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><?php echo date("Y"); ?> Transaction Activities</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="background-color: ">


                            <div id="main_transac" style="height:400px;"><i
                                    class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;"
                                    id="loader_lgn"></i></div>

                        </div>
                    </div>
                </div>

            </div>



            <div class="" id="incoming_graph" style="display: none;">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><?php echo date("Y"); ?> Incoming Transaction Activities</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="background-color: ">


                            <div id="main_in_transac" style="height:400px;"><i
                                    class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;"
                                    id="loader_lgn"></i></div>

                        </div>
                    </div>
                </div>

            </div>


            <div class="" id="outgoing_graph" style="display: none;">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><?php echo date("Y"); ?> Outgoing Transaction Activities</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="background-color: ">


                            <div id="main_out_transac" style="height:400px;"><i
                                    class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;"
                                    id="loader_lgn"></i></div>

                        </div>
                    </div>
                </div>

            </div>



            <div class="">
                <div class="col-md-7 col-sm-12 col-xs-12" id="profit_loss_graph" style="display: none;">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><?php echo date("Y"); ?> Profit/Loss</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div id="yearly_sales_report" style="height:350px;"><i
                                    class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;"
                                    id="loader_lgn"></i></div>

                        </div>
                    </div>
                </div>
                <div class=" col-md-5 col-sm-12 col-xs-12" id="warehouse_value" style="display:none ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Warehouse Value</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div id="warehouse_pie" style="height:350px;"><i
                                    class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: "
                                    id="loader_lgn"></i></div>

                        </div>
                    </div>
                </div>

            </div>





            <div class="" id="expenses_revenue" style="display: none;">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><?php echo date("Y"); ?> Expense & Revenue Summary [₦ mil]</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="background-color: ">


                            <div id="main" style="height:400px;"><i
                                    class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;"
                                    id="loader_lgn"></i></div>

                        </div>
                    </div>
                </div>

            </div>

               <div class="" id="inc_out_graph" style="display: none;">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><?php echo date("Y"); ?> Incoming & Outgoing Summary [₦ mil]</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="background-color: ">


                            <div id="main_inc_out" style="height:400px;"><i
                                    class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;"
                                    id="loader_lgn"></i></div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="" id="expenses_graph" style="display: none;">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><?php echo date("Y"); ?> Expenses Summary [₦ mil]</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="background-color: ">


                            <div id="main_expenses" style="height:400px;"><i
                                    class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;"
                                    id="loader_lgn"></i></div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="" id="revenue_graph" style="display: none;">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><?php echo date("Y"); ?> Revenue Summary [₦ mil]</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="background-color: ">


                            <div id="main_revenue" style="height:400px;"><i
                                    class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;"
                                    id="loader_lgn"></i></div>

                        </div>
                    </div>
                </div>

            </div>











            <div class="" id="transactions" style="display: none;">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Latest Transactions</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="background-color: ">


                            <!-- <div id="main" style="height:400px;"><i class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;" id="loader_lgn"></i></div> -->

                        </div>
                    </div>
                </div>

            </div>


            <!--  <div class="row dsh_dvs" id="incoming_graph" style="display: none;">
                
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Incoming Transactions</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="background-color: ">

                
                     <div id="main" style="height:400px;"><i class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;" id="loader_lgn"></i></div> 

                  </div>
                </div>
              </div>

            </div> -->

            <!-- <div class="row dsh_dvs" id="outgoing_graph" style="display: none;">
                
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Outgoing Transactions</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="background-color: ">

                
                   <div id="main" style="height:400px;"><i class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;" id="loader_lgn"></i></div> 

                  </div>
                </div>
              </div>

            </div> -->













            <div class="col-md-7 col-sm-12 col-xs-12" id="profit_loss_graph" style="display: none;">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo date("Y"); ?> Profit/Loss</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div id="yearly_sales_report" style="height:350px;"><i
                                class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;"
                                id="loader_lgn"></i></div>

                    </div>
                </div>
            </div>


            <!-- <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo date("Y"); ?> Profit/Loss</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <div id="echart_line_445" style="height:350px;"><i class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: " id="loader_lgn"></i></div>

                  </div>
                </div>
              </div> -->




        </div>

        <!-- <div class="row dsh_dvs">
              <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo date("Y"); ?> Profit/Loss</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_pie2" style="height:350px;"></div>

                  </div>
                </div>
              </div>
            </div> -->



    </div>
</div>
</div>
<!-- /page content -->



<script>
function defCalls(warehouse_id) {
    var def = $.Deferred();
    $.when(

        total_individual_items(warehouse_id),
        total_unique_items(warehouse_id),
        total_warehouse_transac(warehouse_id),
        load_transac_graph(warehouse_id),
        load_outgoing_graph(warehouse_id),
        load_incoming_graph(warehouse_id),
        load_profit_loss_graph(warehouse_id),
        fetch_expenses(warehouse_id),
        load_revenue_graph(warehouse_id),
        load_expenses_graph(warehouse_id),
        incoming(warehouse_id),
        outgoing(warehouse_id),

        // fetch_expired(warehouse_id),

        fetch_dashboard_stats(warehouse_id),
        fetch_money_we_owe(warehouse_id),
        fetch_money_we_are_owed(warehouse_id),
        low_item_counts(warehouse_id),
        expiry_items_counts(warehouse_id),
        expired_items_counts(warehouse_id),
        total_overdue_inv(),
        total_overdue_po(),
        best_selling_items(),
        lowest_selling_items(),
        load_rev_exp_graph(warehouse_id),
        load_warehouse_value_pie(warehouse_id),
        load_incoming__outgoing_graph(warehouse_id)
    ).done(function() {

        setTimeout(function() {
            def.resolve();
        }, 3000)

    });
    return def.promise();
}


function total_individual_items(warehouse_id) {

    var company_id = localStorage.getItem('company_id');

    $.ajax({
        type: "POST",
        headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
        dataType: "json",
        url: api_path + "wms/total_individual_items_in_warehouse",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {

            $("#total_all_items").html(response.amount.toLocaleString());
            localStorage.setItem('all', response.amount.toLocaleString());
            console.log(response);
        },
        error: function(response) {
            console.log(response);
        }
    });

}

function total_unique_items(warehouse_id) {


    var company_id = localStorage.getItem('company_id');

    var limit = 50;

    $.ajax({
        type: "POST",
        dataType: "json",
        headers: {
                            'Authorization':localStorage.getItem('token'),
                           },
        url: api_path + "wms/list_store_items",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id,
            "custom_id": "",
            "page": 1,
            "limit": limit,
            "item_name": "",
            "item_code": "",
            "unit_type": ""
        },
        timeout: 60000,
        success: function(response) {
            if (response.total_rows == undefined) {
                response.total_rows = 0;
            }
            $("#total_unique_items").html(response.total_rows);
            console.log(response);
        },
        error: function(response) {

            $("#total_unique_items").html(0);
            console.log(response);
        }
    });

}

function total_warehouse_transac(warehouse_id) {

    var company_id = localStorage.getItem('company_id');

    var limit = 50;

    $.ajax({
        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },
        url: api_path + "wms/list_delivery_supply_history",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id,
            "page": 1,
            "limit": limit,
            "store_type": "incoming"
        },
        timeout: 60000,
        success: function(response) {

            // $("#total_transc").html(response.total_rows);
            outgoing_plus_incoming(response.total_rows, warehouse_id);
            console.log(response);
        },
        error: function(response) {
            console.log(response);
        }
    });

}




function outgoing_plus_incoming(incoming, warehouse_id) {

    var company_id = localStorage.getItem('company_id');

    var limit = 50;

    $.ajax({
        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/list_delivery_supply_history",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id,
            "page": 1,
            "limit": limit,
            "store_type": "outgoing"
        },
        timeout: 60000,
        success: function(response) {


            var new_total = parseFloat(response.total_rows) + parseFloat(incoming);
            if (isNaN(new_total)) {
                new_total = 0;
            } else {

            }

            $("#total_transc").html(new_total);
            console.log(response);
        },
        error: function(response) {
            console.log(response);
        }
    });
}


function incoming(warehouse_id) {

    var company_id = localStorage.getItem('company_id');


    $.ajax({

        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/total_inc_transactions",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {
            console.log(response)
            // var arr = [];
            // $.each(response['data']['list'], function(i, v) {
            // arr.push(Number(v.incoming));
            // console.log(arr)
            // var total = arr.reduce((a,b)=> a + b, 0);
            $("#total_in_transc").html(response.total);

        },
        error: function(response) {
            console.log(response);
        }

    });

}

function outgoing(warehouse_id) {

    var company_id = localStorage.getItem('company_id');


    $.ajax({

        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/total_out_transactions",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {
            // console.log(response)
            // var arr = [];
            // $.each(response['data']['list'], function(i, v) {
            //                arr.push(Number(v.outgoing));
            //                console.log(arr)
            //                var total = arr.reduce((a,b)=> a + b, 0);
            $("#total_out_transc").html(response.total);

        },
        error: function(response) {
            console.log(response);
        }

    });

}

function fetch_dashboard_stats(warehouse_id) {

    var company_id = localStorage.getItem('company_id');
    // var warehouse_id = localStorage.getItem('warehouse_id');

    $.ajax({
        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/total_inv_revenue",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {

            $("#the_rev").html('₦' + numeral(parseFloat(response.amount)).format('0.0a'));
            console.log(response);
        },
        error: function(response) {
            console.log(response);
        }
    });

}


function fetch_money_we_owe(warehouse_id) {

    var company_id = localStorage.getItem('company_id');


    $.ajax({

        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/total_amount_we_owe",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {

            $("#total_xxs").html('₦' + numeral(parseFloat(response.amount)).format('0.0a'));
            console.log(response);
        },
        error: function(response) {
            console.log(response);
        }

    });

}

function fetch_expenses(warehouse_id) {

    var company_id = localStorage.getItem('company_id');


    $.ajax({

        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/total_po_expenses",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {

            $("#the_expnz").html('₦' + numeral(parseFloat(response.amount)).format('0.0a'));
            console.log(response);
        },
        error: function(response) {
            console.log(response);
        }

    });

}

function fetch_expired(warehouse_id) {

    var company_id = localStorage.getItem('company_id');


    $.ajax({

        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/total_po_expenses",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {

            $("#the_expnz").html('₦' + numeral(parseFloat(response.amount)).format('0.0a'));
            console.log(response);
        },
        error: function(response) {
            console.log(response);
        }

    });

}

function fetch_money_we_are_owed(warehouse_id) {

    var company_id = localStorage.getItem('company_id');


    $.ajax({

        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/total_amount_we_are_owed",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {

            $("#total_ddds").html('₦' + numeral(parseFloat(response.amount)).format('0.0a'));
            console.log(response);
        },
        error: function(response) {
            console.log(response);
        }

    });

}

function expired_items_counts(warehouse_id) {

    var company_id = localStorage.getItem('company_id');
    var warehouse_id = localStorage.getItem('warehouse_id');


    $.ajax({
        type: "GET",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/listExpiredItems",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {
            console.log(response);
            if (response.status == "200") {
                response

                $("#expired_count").html(response.total_counts);


            } else if (response.status == "401") {

                $("#expired_count").html('?');

            } else {
                $("#expired_count").html('0');
            }

        },
        error: function(response) {
            console.log(response);
        }
    });

}

function best_selling_items() {

var company_id = localStorage.getItem('company_id');
var warehouse_id = localStorage.getItem('warehouse_id');


$.ajax({
    type: "GET",
    dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

    url: api_path + "wms/top_selling_items",
    data: {
        "company_id": company_id,
        "warehouse_id": warehouse_id
    },
    timeout: 60000,
    success: function(response) {
        console.log(response);
        if (response.status == "200") {

            $("#best_selling").html(response.data.length);


        } else if (response.status == "401") {

            $("#best_selling").html('?');

        } else {
            $("#best_selling").html('0');
        }

    },
    error: function(response) {
        console.log(response);
    }
});

}

function lowest_selling_items() {

var company_id = localStorage.getItem('company_id');
var warehouse_id = localStorage.getItem('warehouse_id');


$.ajax({
    type: "GET",
    dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

    url: api_path + "wms/lowest_selling_items",
    data: {
        "company_id": company_id,
        "warehouse_id": warehouse_id
    },
    timeout: 60000,
    success: function(response) {
        console.log(response);
        if (response.status == "200") {

            $("#lowest_selling").html(response.data.length);


        } else if (response.status == "401") {

            $("#lowest_selling").html('?');

        } else {
            $("#lowest_selling").html('0');
        }

    },
    error: function(response) {
        console.log(response);
    }
});

}


function total_overdue_po() {

    var company_id = localStorage.getItem('company_id');
    var warehouse_id = localStorage.getItem('warehouse_id');


    $.ajax({
        type: "GET",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/total_overdue_PO",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {
            console.log(response);
            if (response.status == "200") {

                $("#total_overdue_PO").html(response.total);


            } else if (response.status == "401") {

                $("#total_overdue_PO").html('?');

            } else {
                $("#total_overdue_PO").html('0');
            }

        },
        error: function(response) {
            console.log(response);
        }
    });

}

function total_overdue_inv() {

    var company_id = localStorage.getItem('company_id');
    var warehouse_id = localStorage.getItem('warehouse_id');


    $.ajax({
        type: "GET",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/total_overdue_INV",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {
            console.log(response);
            if (response.status == "200") {

                $("#total_overdue_INV").html(response.total);


            } else if (response.status == "401") {

                $("#total_overdue_INV").html('?');

            } else {
                $("#total_overdue_INV").html('0');
            }

        },
        error: function(response) {
            console.log(response);
        }
    });

}

function expiry_items_counts(warehouse_id) {

    var company_id = localStorage.getItem('company_id');

    $.ajax({
        type: "GET",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/listItemsAboutExpiry",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {
            console.log(response);
            if (response.status == "200") {
                response

                $("#expiry_count").html(response.total_counts);


            } else if (response.status == "401") {

                $("#expiry_count").html('?');

            } else {
                $("#expiry_count").html('0');
            }

        },
        error: function(response) {
            console.log(response);
        }
    });

}

function low_item_counts(warehouse_id) {

    var company_id = localStorage.getItem('company_id');

    $.ajax({
        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/low_item_counts",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {
            console.log('chief3');
            console.log(response);
            console.log('dsd');
            if (response.status == "200") {

                $("#low_itms").html(response.counts);


            } else if (response.status == "401") {

                $("#low_itms").html('?');

            } else {
                $("#low_itms").html('0');
            }

        },
        error: function(response) {
            console.log(response);
        }
    });

}

function total_values_of_stock(warehouse_id) {

    var company_id = localStorage.getItem('company_id');

    $.ajax({
        type: "POST",
        headers: {'Authorization':localStorage.getItem('token') },
        
        dataType: "json",
        url: api_path + "wms/total_values_of_stock",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,
        success: function(response) {
            $("#total_st_v").html('₦' + numeral(parseFloat(response.amount)).format('0.0a'));
            console.log(response);
        },
        error: function(response) {
            console.log(response);
        }
    });

}
</script>



<?php
include_once("../gen/_common/footer.php"); // header contents
// include_once("_common/footer.php");
?>