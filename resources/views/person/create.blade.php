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
								<span class="text-red-600">
									@error('firstname')
									{{$message}}
									@enderror
								</span>
							</span>
							<span class="sm:col-span-3">
								<label class="block" for="lastname">Last Name</label>
								<input class="block w-full" type="text" name="lastname" id="lastname" value="{{old('lastname')}}">
								<span class="text-red-600">
									@error('lastname')
									    {{$message}}
									@enderror
								</span>
							</span>
							<span class="sm:col-span-3">
								<label class="block" for="email">Email</label>
								<input class="block w-full" type="text" name="email" id="email" value="{{old('email')}}">
								<span class="text-red-600">
									@error('email')
									    {{$message}}
									@enderror
								</span>
							</span>
							<span class="sm:col-span-3">
								<label class="block" for="phone">Phone</label>
								<input class="block w-full" maxlength="10" pattern="\d{10}" type="text" name="phone" id="phone" value="{{old('phone')}}" >
								<span class="text-red-600">
									@error('phone')
								    	{{$message}}
									@enderror
								</span>
							</span>
							<span class="sm:col-span-3">
								<label for="business" class="block">Business</label>
								<select class="block w-full" name="business_id" id="business_id">
									 <option value="" selected>(No business)</option>
									@foreach ($businesses as $business )
										<option value="{{$business->id}}" @selected($business->id == old('business_id'))>
											{{$business->Business_name}}
										</option>
									@endforeach
								</select>
								
							</span>
						</div>
						<div class="mt-6 flex item-center justify-end gap-x-6 ml-3">
							<button class=" text-white rounded-full py-2 px-3" style="background-color: green; margin-right:5px;" type="submit">Save</button>
							<a class="bg-red-600 text-white rounded-full py-2 px-3" href="{{route('person.index')}}">Cancel</a>
							
						</div>

		
					</form>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>