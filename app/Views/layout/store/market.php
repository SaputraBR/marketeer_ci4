<head>
    <?= $this->include('layout/store/head')?>
    <?= $this->renderSection('style')?>
</head>

<body class="bg-slate-100 max-w-screen-2xl mx-auto">
    <?= $this->include('layout/store/navbar')?>

    <?= $this->renderSection('content')?>

    <?= $this->include('layout/store/footer')?>

    <?= $this->renderSection('script')?>
</body>