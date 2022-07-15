<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Festive Walk Karawang</title>
  <meta content="beli tiket rumah hantu" name="description">
  <meta content="beli tiket" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->   
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">  
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">  
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">  
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">  
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">  
 
  <!-- Template Main CSS File -->

  <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/ticket.css') }}" rel="stylesheet">
  <link href="{{ asset('css/button_add_minus.css') }}" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: Bootslander - v4.7.2
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<div class="wrapper">   
      <div class="container">
        <div class="row content">

        <div class="section-title" data-aos="fade-up">
          <h2>Beli Tiketnya</h2>
          <p>Beli tiket rumah hantu</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="d-flex justify-content-center">
            <div class="card" style="width: auto;">   
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <div class="row"><p>Rumah Hantu Drive Thru</p>
                  <small>Rumah hantu festive walk karawang</small></div>
                  <img class="rounded" src="{{ asset('img/rumahhantujkt.jpg') }}" alt="" style="width: 50px;height: 50px;" >
                </div>
                
              </div>
              <div class="card-body d-flex align-items-center flex-column mb-3 panel_ticket" id="panel_ticket">
                  <div style="font-weight: bold; color: rgb(51, 51, 51);">Pilih tanggal kedatanganmu</div> <br>                                     
                

                <div class="card mt-2" style="width: 100%; margin: 20px;">                  
                  
                <form id="pesanticket" name="pesanticket" action="{{ route("pesanticket") }}" method="post">
                  <div class="input-group mb-3">
                      <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>                      
                      <input type="text" name="ticket_date" class="form-control datepicker" data-date-format="yyyy-mm-dd">
                    </div>
                  <div class="card-body ticketitem" id="ticket_box">
                    
                    <div class="notif_ticket" ></div>
                    <div class="ticket"></div>
                    
                              
                  </div>   
                  <hr>
                  <div class="d-flex bd-highlight">    
                      
                      <div class="p-2 flex-grow-1 bd-highlight all_qty">Subtotal (<span style="font-style: italic;"></span> Tiket)</div>
                      <div class="p-2 bd-highlight total"> Rp.<span>  </span></div>
                      
                    </div>

                  <div class="card-footer">
                    <div class="row">
                      <div class="col-12">
                        <button class="btn btn-primary w-100 d-block" type="button" id="btn_payment" disabled="disabled">Pilih tiket dan lanjutkan</button>                                              
                      </div>
                    </div>                  
                  </div>

                  </div>
                  </div>   
                
                  <!-- payment chanel view -->
                  <div class="card-body" id="payment_panel" class="payment_panel" style="display: none;">
                                     

                  <h6 class="text-primary">Informasi Pembeli</h6>
                  
                  <hr>

                  <div class="row g-3">
                    <div class="col-md-12">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" name="cust_email" class="form-control" id="inputEmail4" required>
                    </div>                    
                    <div class="col-12">
                      <label for="phoneNumber" class="form-label">Nomor Handphone</label>
                      <input type="number" name="cust_phone" class="form-control" id="phoneNumber" placeholder="08129323121" required>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <label for="namaDepan" class="form-label">Nama Depan</label>
                      <input type="text" name="cust_firstname" class="form-control" id="namaDepan" required
                        placeholder="Nama Depan">
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <label for="namaBelakang" class="form-label">Nama Belakang</label>
                      <input type="text" name="cust_lastname" class="form-control" id="namaBelakang"
                        placeholder="Nama Belakang">
                    </div>
                   <div class="col-md-12">
                     <label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
                     <div class="form-check">
                       <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="lakilaki">
                       <label class="form-check-label" for="flexRadioDefault1">
                        Laki laki
                       </label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="perempuan"
                         >
                       <label class="form-check-label" for="flexRadioDefault2">
                         Perempuan
                       </label>
                     </div>
                   </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="cust_agree" type="checkbox" value="1" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                          Saya setuju terhadap <a href="#">Syarat dan Ketentuan</a>  tiketing dan <a href="#">Kebijakan Privasi</a> tiketing
                        </label>
                      </div>
                    </div>                   
                  </div>

                  <hr>
                  
                  <div class="card-body">
                      <h6 class="text-primary">Pilih Metode pembayaran</h6>
                      
                      <div class="row">
                          <div class='col col-sm-3 col-xs-3 col-md-3 text-center'>
                              <input type="radio" name="payment_method" id="bank_transfer" class="d-none imgbgchk"
                                  value="bank_transfer">
                              <label for="bank_transfer"><small>bank transfer</small>
                                  <img src="{{ asset('icon/banktficon.png') }}" alt="Image 1">
                                  <div class="tick_container">
                                      <div class="tick"><i class="bi bi-check"></i></div>
                                  </div>
                              </label>
                          </div>
                          <div class='col col-sm-3 col-xs-3 col-md-3 text-center'>
                              <input type="radio" name="payment_method" id="credit_card" class="d-none imgbgchk"
                                  value="credit_card">
                              <label for="credit_card"><small>kartu kredit</small>
                                  <img src="{{ asset('icon/creditcard.png') }}" alt="Image 2">
                                  <div class="tick_container">
                                      <div class="tick"><i class="bi bi-check"></i></div>
                                  </div>
                              </label>
                          </div>
                           <div class='col col-sm-3 col-xs-3 col-md-3 text-center'>
                              <input type="radio" name="payment_method" id="qris" class="d-none imgbgchk"
                                  value="qris">
                              <label for="qris"><small>QRIS (Gopay / ShopeePay</small>
                                  <img src="{{ asset('icon/layanan qris.png') }}" alt="Image 2">
                                  <div class="tick_container">
                                      <div class="tick"><i class="bi bi-check"></i></div>
                                  </div>
                              </label>
                          </div>
                      </div>

                      <input type="hidden"  name="total_price" id="total_price" value="0"> 
                      <input type="hidden" name="grand_total" id="grand_total" value="0"> 

                      <p>Biaya admin tergantung dari metode pembayaran :                         
                      </p>
                      <ol>
                        <li>Bank transfer : Rp.5000 / Transaksi</li>
                        <li>kartu kredit : 3% dari jumlah total Transaksi</li>
                        <li>QRis : 2.7% dari jumlah total Transaksi</li>
                      </ol>
                  </div>
                  
                  <div class="card-footer">
                   <div class="d-flex justify-content-between bd-highlight">     
                      <input type="hidden" name="admin_fee" id="biaya_admin">
                      <input type="hidden" name="total_qty" id="total_qty">                      
                      <div class="p-2 flex-grow-1 bd-highlight all_qty">Subtotal (<span style="font-style: italic;"></span> Tiket)</div>
                      <div class="p-2 bd-highlight total">Total tiket Rp. <span style="font-style: bold;">Total tiket Rp.</span></div>
                      <input >
                    </div>
                    <div class="d-flex justify-content-end bd-highlight">
                      <div class="p-2 bd-highlight admin_fee"> <span style="font-style: bold;">Biaya Admin Rp. </span></div>
                    </div>
                     <div class="d-flex justify-content-end bd-highlight">
                      <div class="p-2 bd-highlight grand"> <span style="font-style: bold;"> Grand total Rp. </span></div>
                    </div>
                    
                    <div class="d-flex flex-row bd-highlight">
                      <div class="p-2 flex-grow-1 bd-highlight"><a href="#featured" class="scrollTok"> <i class='bx bx-arrow-back'></i> Kembali</a></div>
                      
                      <div class="p2 bd-highlight">
                        <button  type="submit" class="btn btn-primary">Checkout</button>
                        </form>
                      </div>
                    </div>
                  </div>
               
                  </div>                         
              </div>
          
           </div>
          </div>          
          
        </div>
      </div>
      
      </div>    
  <!-- ======= Header ======= -->

  

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  {{-- <script src="{{ asset('js/main.js') }}"></script> --}}

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="{{ asset('js/jquery.expander.js') }}"></script>

  <!-- REQUIREMENT KALENDER AND TIKETING -->

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/vue@3.2.37/dist/vue.global.min.js"></script> -->

  <script src="{{ asset('js/jquery-redirect.js') }}"></script> 


    <!-- 2. Link VCalendar Javascript (Plugin automatically installed) -->
    {{-- <script src='https://unpkg.com/v-calendar'></script> --}}

    <!--3. Create the Vue instance-->

    <script type="application/javascript">   

       $(document).ready(function () {
           $('.readmore').expander({
               slicePoint: 50
           });

           $('.datepicker').datepicker({
              
              locale: 'id',
              startDate: new Date('2022-08-17'),
              endDate: new Date('2022-09-30'),                            
          });          

           $(".datepicker").on('change', function () {
            
               var tanggal = $(this).val(); 
               //reset all
               $('.notif_ticket').empty();
               $('.ticket').empty();
               $(".all_qty span").html("0");
               $(".total span").html("Total tiket Rp.0");
               $(".admin_fee span").html("Biaya admin Rp.");               
               $(".grand span").html("Grand total Rp.");
               $("#grand_total").val(0);               
               $("#btn_payment").prop('disabled', true);
               $.ajax({
                   url: "{{ route('ticket') }}",
                   data: {
                       tanggal: tanggal
                   },
                   type: 'post'
               }).done(function (json) {
                   if (json.data && json.message == 'Success') {
                       json.data.forEach(function (item) {

                           console.log(item.ticket_name);
                           $('.ticket').append(' <div class="items"> <p class="ticket-title">' + item.ticket_name + '</p> <br> <p class="ticket-description"> <i class="bi bi-clock"></i> ' + item.ticket_date + ' , 16.00 - 22.00 WIB </p> <div class="readmore"> <p class="ticket-description">Syarat dan ketentuan</p> <ol> <li class="ticket-description"><p >Tiket hanya berlaku sesuai kebijakan</p></li> <li class="ticket-description"><p>Tiket masuk belum termasuk tiket konser</p></li> <li class="ticket-description"><p>Tiket berlaku 1 kali kunjungan</p></li> <li class="ticket-description"><p>Tiket tidak dapat dikembalikan (non refundable)</p></li> </ol> </div> <br> <div class="d-flex flex-row-reverse bd-highlight"> <div class="p-2 bd-highlight qtyControl" style="width: 115px !important;"> <div class="input-group input-group-sm"> <button class="btn btn-outline-primary btn-number" type="button" disabled="disabled" data-type="minus" data-ticket="' + item.ticket_name + '" data-id-ticket="' + item.id + '" data-field="quant[' + item.id + ']"> <i class="bx bx-minus"></i> </button> <input type="text" name="quant[' + item.id + ']" class="form-control input-sm input-number qt" value="0" min="0" max="10"> <input type="hidden" name="ticket['+item.id+']" value="'+item.ticket_name+'"> <input type="hidden" name="id_ticket[' + item.id + ']" value="' + item.id + '"> <input type="hidden" name="price[' + item.id + ']" class="input-number price" value="' + item.ticket_price + '"> <input type="hidden" name="fullprice[' + item.id + ']" class="input-number full-price" value="0"> <button class="btn btn-outline-primary btn-number" data-type="plus" data-ticket="' + item.ticket_name + '" data-id-ticket="' + item.id + '" data-field="quant[' + item.id + ']"> <i class="bx bx-plus"></i> </button> </div> </div> <div class="p-2 bd-highlight"><p class="mr-2">Rp. ' + item.ticket_price + ' </p> </div> </div> <hr> </div> ');
                       })
                   }

               }).fail(function () {
                   $('.notif_ticket').append('<h3 class="text-muted">Ticket tidak tersedia</h3>');
               });
           });
         
       }); 
       </script> 
           
    <script type="application/javascript">
      $('#btn_payment').click(function(e){
        $('.panel_ticket').attr("style", "display: none !important");
        $('#payment_panel').show();
                 
      });

      $('#btn_lanjutkan').click(function(e){
        $('#payment_panel').attr("style", "display: none !important");        
        $('#panel_payment2').show(); 
                
      });
      

      $(".scrollTok").on('click', function(e) {
          e.preventDefault();
          var target = $(this).attr('href');
            $('.panel_ticket').attr("style", "display: ");
            $('#payment_panel').hide();  
            $('#btn_lanjutkan').attr('disabled', true);
            $('input:radio').prop('checked', false);

        });
    </script>

    <script>
    $(document).ready(function() { 
      
      $('#pesanticket').on('submit', function (e) {
                  //checkout ticket
                  e.preventDefault();
                  $.ajaxSetup({
                    headers: {
                        "X-CSRFToken": $('meta[name="csrf-token"]').attr('content')
                    }
                });
                  $.ajax({
                      url: "{{ route('pesanticket') }}",
                      type: "POST",
                      data: $('#pesanticket').serialize(),
                      success: function (response) {                          
                          alert('Berhasil checkout dengan '+response.data);
                          document.getElementById("pesanticket").reset();
                          window.location.href = "{{ url('payment') }}/"+response.data;
                          // $.redirect('{{ url("payment") }}', {'order_id': response.data, "X-CSRFToken" : $('meta[name="csrf-token"]').attr('content')});
                      }
                  });
               
          });
      });
      
    </script>

    
    <script src="{{ asset('js/btnEvent.js') }}"></script> 
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script> 
    <script src="{{ asset('js/locales/bootstrap-datepicker.id.min.js') }}"></script> 


    <!-- END REQUIREMENT KALENDER AND TIKETING -->
      
</body>

</html>