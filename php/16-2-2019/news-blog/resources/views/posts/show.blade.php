<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">				
		<table class="table">
		    <tr>
		        <td>ID</td>
		        <td>Title</td>
		        <td>Category</td>
		        <td>Content</td>
		        <td>Actions </td>
		    </tr>
		    @foreach($posts as $post)
		    <tr>
		    <td>{{$post->id}}</td>
		    <td>{{$post->title}}</td>
		    <td>{{$post->category}}</td>
		    <td>{!!$post->content!!}</td>
		    <td>
		    	<div class="d-flex">
				<form action="{{route('posts.show',$post->id)}}"><button>Show</button></form>
                <form action="{{route('posts.edit', $post->id)}}"><button>Edit</button></form>
				<form action="{{route('posts.destroy', $post->id)}}" method="POST">
					<input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
					<button>Delete</button>
				</form>
				</div>
		    </td>
		    </tr>
		    @endforeach
		</table>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
