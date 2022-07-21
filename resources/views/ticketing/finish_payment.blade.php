<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pekan Raya Karawang</title>
  <meta content="beli tiket pekan raya karawang" name="description">
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
          <h2 class="text-center">Pekan Raya Karawang</h2>
          <p class="text-center">Powered By Galuh Mas Karawang</p>
        </div>

         <div class="row" data-aos="fade-left">
          <div class="d-flex justify-content-center">
            <div class="card" style="width: auto;">   
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <div class="row"><h2>Tiket Online pekan raya karawang</h2>
                  <small>Tiket Online Pekan Raya Karawang</small></div>
                  <img class="rounded" src="{{ asset('img/logo_prk.png') }}" alt="" style="width: 50px;height: 50px;" >
                </div>
                
              </div>
                                              

                <div class="card-body" id="panel_payment2">
                  <div class="row">
                    <div class="col-md-4">
                      Selesaikan pesanan anda dalam :
                    </div>
                    <div class="col-md-6"> {{ $order_data->expired_time }}</div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      Nomor Pesanan
                    </div>
                    <div class="col-md-6">
                    : {{ $order_data->order_code }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      Email Pembeli
                    </div>
                    <div class="col-md-6">
                     : {{$order_data->customer_email }}
                    </div>
                  </div>
                  <small class="text-primary">*Informasi dikirimkan ke email</small>
                
                <hr>

                <div class="ticket_selected">
                      <div class="row">
                      @foreach($order_items as $order_item)
                        <div class="col-md-6 col-sm-6"><p class="text-black">{{ $order_item['ticket_name'] ." ".TanggalIndo::tgl_indo($order_data->ticket_date) }}</p></div>                      
                        <div class="col-md-4 col-sm-4"><p class="text-black"> x {{ $order_item['qty'] }}</p></div>                                              
                      @endforeach
                      </div>
                      <div class="row">
                        <p class="ticket-description"> <i class="bi bi-clock"></i>  {{ $order_data->ticket_date }} , 16.00 - 22.00 WIB  </p>
                      </div>
                    </div>
                                

                <div class="card-footer">
                   <div class="d-flex justify-content-between bd-highlight">     
                      <div class="p-2 flex-grow-1 bd-highlight all_qty">Jumlah tiket (<span style="font-style: italic;">{{ $order_data->total_ticket }}</span> Tiket)</div>
                      <div class="p-2 bd-highlight total">Subtotal <span style="font-style: bold;">Rp. {{ $order_data->grand_total - $order_data->admin_fee }}</span></div>
                      
                    </div>
                    {{-- <div class="d-flex justify-content-end bd-highlight">                      
                      <div class="p-2 bd-highlight admin_fee"> <span style="font-style: bold;">Biaya Admin Rp.{{$order_data->admin_fee}} </span></div>                      
                    </div> --}}
                     <div class="d-flex justify-content-end bd-highlight">                      
                      <div class="p-2 bd-highlight grand"> <span style="font-style: bold;"> Grand total Rp. {{$order_data->grand_total}}</span></div>
                    </div>
                    
                    <div class="d-flex justify-content-end bd-highlight">                     
                      <div class="p2 bd-highlight"><button class="ticket_btn" id="btn_checkout">Bayar</button></div>
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


    <!--3. Create the Vue instance-->

  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script>
        const payButton = document.querySelector('#btn_checkout');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();
 
            snap.pay('{{ $snapToken }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                }
            });
        });
    </script>

    
    <script src="{{ asset('js/btnEvent.js') }}"></script> 
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script> 
    <script src="{{ asset('js/locales/bootstrap-datepicker.id.min.js') }}"></script> 


    <!-- END REQUIREMENT KALENDER AND TIKETING -->
      
</body>

</html>