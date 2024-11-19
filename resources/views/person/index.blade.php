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

					<div class="flex item-center justify-end">
						<!-- <a class="bg-blue-600 text-white py-2 px-3 rounded-full" href="{{route('person.create')}}">Add Person</a> -->
						<a class="bg-red-600 text-white py-2 px-3 rounded-full" href="{{route('person.create')}}">Add Person</a>
					</div>

					<table class="table-fixed border-separate border-spacing-6 text-center">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Business</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($people as $person)
							<tr>
								<td>
									{{$person->firstname}} {{$person->lastname}}
								</td>
								<td>
									{{$person->email}}
								</td>
								<td>
									{{$person->phone}}
								</td>
								<td>
									{{$person->business?->business_name}}
								</td>
								<td>
									<a href="{{route('person.edit', $person->id)}}">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
											<path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
										</svg>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
