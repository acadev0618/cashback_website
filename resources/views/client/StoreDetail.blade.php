@extends('layout.app')
@section('header',"home")

@section('content')
<div class="container">
	<div class="block-wrapper">
		<div class="border border-sb-white shadow bg-sb-white-two border-solid rounded py-6 px-4 flex flex-col md:px-6 md:flex-row md:flex-no-wrap md:justify-start md:items-center" style="background-color: white">
		    <div class="cursor-pointer outline-none flex justify-center mb-4 md:mb-0" role="button" tabindex="0">
		        <div class="w-px-134 md:w-px-191">
		            <picture>
		                <source data-srcset="https://img.shopback.com.au/Z2Uern2KuO8/rs:fit/w:120/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.webp 120w,https://img.shopback.com.au/huVVYuNWbaQ/rs:fit/w:240/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.webp 240w,https://img.shopback.com.au/YfPXse3fex8/rs:fit/w:480/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.webp 480w," type="image/webp" sizes="" srcset="https://img.shopback.com.au/Z2Uern2KuO8/rs:fit/w:120/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.webp 120w,https://img.shopback.com.au/huVVYuNWbaQ/rs:fit/w:240/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.webp 240w,https://img.shopback.com.au/YfPXse3fex8/rs:fit/w:480/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.webp 480w,">
		                <source data-srcset="https://img.shopback.com.au/BoLwfz7qcIw/rs:fit/w:120/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.jpg 120w,https://img.shopback.com.au/Tpq-N7XqBp8/rs:fit/w:240/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.jpg 240w,https://img.shopback.com.au/Fr7uAo51M4s/rs:fit/w:480/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.jpg 480w," type="image/jpeg" sizes="" srcset="https://img.shopback.com.au/BoLwfz7qcIw/rs:fit/w:120/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.jpg 120w,https://img.shopback.com.au/Tpq-N7XqBp8/rs:fit/w:240/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.jpg 240w,https://img.shopback.com.au/Fr7uAo51M4s/rs:fit/w:480/h:0/g:ce/el:0/q:80/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.jpg 480w,">
		                <img class="max-h-full w-full lazyloaded" data-src="https://img.shopback.com.au/u5tw3Zd09A8/rs:fit/w:1000/h:0/g:ce/el:1/q:75/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.jpg" alt="Shopback eBay Australia" sizes="" src="https://img.shopback.com.au/u5tw3Zd09A8/rs:fit/w:1000/h:0/g:ce/el:1/q:75/bl:0/aHR0cHM6Ly9jbG91ZC5zaG9wYmFjay5jb20vdF9zZF8yNTBfcGFkL3N0b3JlLXNlcnZpY2UtYXUvYXNzZXRzLzg0MzcvMWY5M2E2YjItOTg5NS0xMWU5LTg2NTktNTdhNzMyZWZhYjI4LnBuZw.jpg">
		            </picture>
		        </div>
		    </div>
		    <div class="flex flex-col items-center md:flex-1 mb-4.5 md:ml-6 md:mb-0 md:items-start">
		        <h1 class="text-lg font-bold text-sb-slate-grey mb-3 text-center md:text-left md:text-2xl md:mb-0">eBay Cashback in Australia for September 2020</h1>
		        <span class="text-sm md:text-lg ">
		            <span class="font-bold text-sb-coral">Up to 2.00% Cashback</span>
		        </span>
		    </div>
		    <div class="cursor-pointer flex justify-center items-center mb-4.5 md:mb-0">
		        <span style="display:inline-block;direction:ltr">
		            <span style="cursor:inherit;display:inline-block;position:relative">
		                <span class="text-sb-very-light-pink-four">★</span>
		                <span style="display:inline-block;position:absolute;overflow:hidden;top:0;left:0;width:100%">
		                    <span class="text-sb-mango">★</span>
		                </span>
		            </span>
		            <span style="cursor:inherit;display:inline-block;position:relative">
		                <span class="text-sb-very-light-pink-four">★</span>
		                <span style="display:inline-block;position:absolute;overflow:hidden;top:0;left:0;width:100%">
		                    <span class="text-sb-mango">★</span>
		                </span>
		            </span>
		            <span style="cursor:inherit;display:inline-block;position:relative">
		                <span class="text-sb-very-light-pink-four">★</span>
		                <span style="display:inline-block;position:absolute;overflow:hidden;top:0;left:0;width:100%">
		                    <span class="text-sb-mango">★</span>
		                </span>
		            </span>
		            <span style="cursor:inherit;display:inline-block;position:relative">
		                <span class="text-sb-very-light-pink-four">★</span>
		                <span style="display:inline-block;position:absolute;overflow:hidden;top:0;left:0;width:66.66666666666998%">
		                    <span class="text-sb-mango">★</span>
		                </span>
		            </span>
		            <span style="cursor:inherit;display:inline-block;position:relative">
		                <span class="text-sb-very-light-pink-four">★</span>
		                <span style="display:inline-block;position:absolute;overflow:hidden;top:0;left:0;width:0%">
		                    <span class="text-sb-mango">★</span>
		                </span>
		            </span>
		        </span>
		        <div class="m-2 text-sb-slate">
		            <span>Avg: 3.7/5</span>
		        </div>
		    </div>
		    <div class="flex outline-none min-w-150 sm:self-center md:ml-6">
		        <button class="cursor-pointer bg-sb-coral rounded py-1 px-7 h-8 text-sm font-bold w-full outline-none focus:outline-none pl-2 pr-2 bg-sb-coral text-sb-white-two border" type="button">
		            <span>Shop Now</span>
		        </button>
		    </div>
		</div>
	</div>
	<div class="left-container">
		@include('common.sidebar.shopbar')
	</div>
	<div class="right-container">
		@include('common.sidebar.sideDeal')
	</div>
</div>
@endsection
