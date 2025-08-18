<?php $this->extend('layouts/app'); ?>
<h1 class="text-xl font-bold">Upload File</h1>

<form method="POST" action="/upload" enctype="multipart/form-
data">

<input type="file" name="file" class="mb-4">

<button type="submit" class="bg-blue-600 text-white px-4 py-
2 rounded">Upload</button>

</form>