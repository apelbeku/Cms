<!DOCTYPE html>
<html>
<head>
	<title>The  Aliance</title>
	<!-- Tailwind -->
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<!-- FontAWesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<!-- Jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
	<!-- OwlCarousel -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

	<style type="text/css">
		.dropdown:hover .dropdown-con{
			dispaly:block;
		}
	</style>
</head>
<body>

	<!-- Navbar -->
	<div class="h-16 bg-gradient-to-r from-green-400 via-teal-400 to-blue-400">
		<div class=" mx-auto flex justify-between class">
			<div class="p-4 hover"><a href="/" class="text-white text-2xl">The Aliance</a></div>
			<div class="p-5">
				<a href="/login" class="bg-transparant hover:bg-green-400 font-semibold text-white hover:text-white px-2 py-2 border-2 border-green-400 border-transparent rounded">Log In</a>
			</div>
		</div>
	</div>

	<!-- content -->
	<div class="my-12">
		<div style="padding:0px 5px;margin-bottom:130px;" class="container mx-auto flex justify-between my-12">
			<!-- Left -->
			<div class="">
				<div class="border-green-500 mb-12">
					<div class="justify-between mb-5">
						<div class="border rounded border-green-400">
							<img style="width:820px; padding:3px;" src="https://i.pinimg.com/originals/82/3e/2f/823e2f13b903a3790f6790ad9688d77e.jpg">
						</div>
					</div>
					<div class="border-b border-green-500 mb-8 pb-2">
						<a href="#" class="text-4xl mb-2">Template</a>
						<div class="flex flex-wrap">
							<div class="pb-2">
								<a href="#"><i class="fas fa-calendar-alt pr-2 text-green-500"></i>Agustus 2 2020</a>
							</div>
							<div>
								<a href="#"></a>
							</div>
						</div>
					</div>
					<div style="width:820px;padding:0px 10px;" class="">
						<a href="" class="font-thin">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</a>
					</div>
					<div class="mt-10">
						<div class="flex">
							<div class="m-1">
								<a href="https://www.facebook.com" class="fab fa-facebook-square text-3xl text-green-500 hover:text-green-400"></a>
							</div>
							<div class=" m-1">
								<a href="https://www.twitter.com" class="fab fa-twitter-square text-3xl text-green-500 hover:text-green-400"></a>
							</div>
							<div class="m-1">
								<a href="https://www.instagram.com" class="fab fa-instagram-square text-3xl text-green-500 hover:text-green-400"></a>
							</div>
						</div>
						<div class="float-right">
							<a href="/" class="bg-transparant hover:bg-green-500 text-green-500 hover:text-white text-semibold border rounded px-4 py-3">Previous</a>
						</div>
					</div>
				 </div>
				</div>
			<!-- Right -->
			<div class="">
				<div>
					<div class="flex mx-auto">
						<input type="text" name="" class="border border-green-500" style="width:345px;height:37px;">
						<a href="#" class="bg-transparant bg-green-500 hover:bg-green-200 text-white hover:text-green-500 border border-green-500 pl-3 pr-2" style="height:37px;width:40px;padding-top:7px;padding-bottom:7px;border-top-right-radius:5px;border-bottom-right-radius:5px;"><i class="fas fa-search"></i></a>
					</div>
					<div class="flex">
						<div class="">
							<div dir="flex">
								<span class="p-3 my-4 bg-transparant bg-white hover:bg-green-300 relative inline-block text-md hover:border text-green-500 hover:text-white">POPULAR</span>
								<span class="p-3 my-4 bg-transparant bg-white hover:bg-green-300 relative inline-block text-md hover:border text-green-500 hover:text-white">CATEGORY</span>
								<span class="p-3 my-4 bg-transparant bg-white hover:bg-green-300 relative inline-block text-md hover:border text-green-500 hover:text-white">TAG</span>
							</div>
							<ul class="h-2 absolute hidden z-auto dropdown-con">
								<li class="flex">
									<div class="border border-green-500" style="border-radius:2px;padding:2px;">
										<img style="width:100px;" src="https://images.unsplash.com/photo-1518098268026-4e89f1a2cd8e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1568&q=80">
									</div>
									<div style="width:200px;padding-right:10px;padding-left:10px;">
										<a href="#" class="flex-wrap text-md"> is simply dummy text of</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="items-center" style="height:75px">
		<div class="flex justify-center">
			<div class="pr-3" style="margin-top:5px;">
				<a href="#" class="text-lg text-green-500 hover:text-green-400">Follow Us:</a>
			</div>
			<div class="px-1">
				<a href="https://www.facebook.com" class="fab fa-facebook-square text-4xl text-green-500 hover:text-green-400"></a>
			</div>
			<div class="px-1">
				<a href="https://www.twitter.com" class="fab fa-twitter-square text-4xl text-green-500 hover:text-green-400"></a>
			</div>
			<div class="px-1">
				<a href="https://www.instagram.com" class="fab fa-instagram-square text-4xl text-green-500 hover:text-green-400"></a>
			</div>
			<div class="px-1">
				<a href="https://www.telegram.com" class="fab fa-telegram text-4xl text-green-500 hover:text-green-400"></a>
			</div>
		</div>
	</div>


	<!-- Creator -->
	<div class="bg-gray-700 py-3 items-center" style="height:60px">
		<div class="flex justify-center">
			<div class=" justify-end" style="margin-top:5px;">
				<a href="#" class="text-sm text-green-500 hover:text-green-400">Creted By: Syauqy</a>
			</div>
		</div>
	</div>

	<!-- Script -->
	<script type="text/javascript">
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				autoplay: true,
				items:1,
			});
		});
	</script>
</body>
</html>