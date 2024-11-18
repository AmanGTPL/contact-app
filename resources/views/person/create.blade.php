<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('People') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900">
					<h3 class="front-semibold pb-5 m-6">Add new Person</h3>
					<form action="{{route('person.store')}}" method="POST">
						@csrf
						<div class="grid grid-col-1 sm:grid-col-6 gap-x-6">
							<span class="sm:col-span-3">
								<label class="block" for="firstname">First Name</label>
								<input class="block w-full" type="text" name="firstname" id="firstname" value="{{old('firstname')}}">
							</span>
							<span class="sm:col-span-3">
								<label class="block" for="lastname">Last Name</label>
								<input class="block w-full" type="text" name="lastname" id="lastname" value="{{old('lastname')}}">
							</span>
							<span class="sm:col-span-3">
								<label class="block" for="email">Email</label>
								<input class="block w-full" type="text" name="email" id="email" value="{{old('email')}}">
							</span>
							<span class="sm:col-span-3">
								<label class="block" for="phone">Phone</label>
								<input class="block w-full" type="text" name="phone" id="phone" value="{{old('phone')}}">
							</span>
						</div>
						<div class="mt-6 flex item-center justify-end gap-x-6 ml-3">
							<a class="bg-red-600 text-black rounded-full py-0 px-3 mr-6" href="{{route('person.index')}}">Cancel</a>
							<button class="bg-red-600 text-black rounded-full py-0 px-3" type="submit">Save</button>
						</div>
		
					</form>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>