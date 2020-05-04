$(document).ready(function(){
                  $("#myform1").submit(function(){
                                       if($('span.error').length &gt; 0){
                                       alert('Errors!');
                                       return false;
                                       } else {
                                       $('#btn-submit').after('<span class="error">Form Accepted.</span>');
                                       return false;
                                       }
                                    
                                    });
                  });