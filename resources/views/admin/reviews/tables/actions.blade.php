<div class="flex items-center">
  <a href="{{route('admin.reviews.show', $id)}}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md cursor-pointer">
    <i class="fa fa-eye"></i>
  </a>

  <a href="{{route('admin.reviews.edit', $id)}}" class="bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded-md cursor-pointer mx-1">
      <i class="fa fa-edit"></i>
  </a>

  <form action="{{route('admin.reviews.destroy', $id)}}" method="POST">
    @csrf
    @method('delete')

    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md cursor-pointer">
      <i class="fa fa-trash-alt"></i>
    </button>
  </form>
</div>