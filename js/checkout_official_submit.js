$(document).ready(function(){
                  return $("#myform").submit(function(){
                                      // Validate Credit Card Number Syntax
                                      var rege = /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/;
                                      if(!rege.test($('input#cc_number').val())){
                                        //Error Message
                                        $('#formResponse').empty();
                                        $('#formResponse').append("The credit card number is invalid. Please revise it and try again.");
                                        return false;
                                      }
                                      //Validate Credit Card Security Code Syntax
                                      var rege2 = /^[0-9.]{3,4}$/;
                                      if(!rege2.test($('input#cc_cvv2').val())){
                                        //Error Message
                                        $('#formResponse').empty();
                                        $('#formResponse').append("The security code (CVC) is invalid. Please revise it and try again.");
                                        return false;
                                      }

                                     $("#submit_btn").attr("disabled", true);
                                      dataString = $("#myform").serialize();
                                      var toReturn = false;
                                      var firstdata_response = "";
                                      //alert("Values:" + dataString);
                                      $.ajax({
                                             type: "POST",
                                             url: "/cart/send",
                                             async: false,
                                             data: dataString,
                                             dataType: "json",
                                             //beforeSend: function(){
                                               // alert("Starting Submission");
                                               // },
                                             success: function(json){
                                                $('#formResponse').append(json);
                                                if (json['error']) {
                                                    $('#formResponse').empty();
                                                    $('#formResponse').append(json['error']);
                                                   // alert("Error in Submission");
                                                   $("#submit_btn").attr("disabled", false);
                                                   toReturn = false;
                                                }
                                                
                                                if (json['success']) {
                                                    $('#formResponse').empty();
                                                    $('#formResponse').append(json['success'])
                                                    //$('#formResponse').append(json['responsefirstdata'])
                                                    var firstdata_response = json['responsefirstdata'];
                                                    $("#firstdata_response").attr("value", firstdata_response);
                                                    //alert("Success in Submission");
                                                    //return true;
                                                    //toReturn = true;
                                                    $("#submit_btn").attr("disabled", false);
                                                    if(json['success'] != "Transaction was successful!")
                                                      toReturn = false;
                                                    else
                                                      toReturn = true;

                                                }
                                             },
                                             error: function(){
                                                $('#formResponse').empty();
                                                $('#formResponse').append("System Error. Please revise all details and try again.");
                                                $("#submit_btn").attr("disabled", false);
                                                toReturn = false;
                                                }
                                             });
                                    return toReturn;
                              //    toReturn = false;
                              //    function ReturnVal(a) {
                              //      returnData = a;
                              //    }
                                      
                                    //  if(!toReturn) {
                                    //    alert("YES");
                                    //  }
                                 //     if (toReturn) {
                                 //       return true;
                                 //     }
                                 //     else {
                                 //       return false;
                                 //     }
                                      //if(!toReturn) {
                                      //  return false;
                                      //}
                                      //if(toReturn) {
                                      //  return true;
                                      //}
                                    //return false;
                                    });
                  });