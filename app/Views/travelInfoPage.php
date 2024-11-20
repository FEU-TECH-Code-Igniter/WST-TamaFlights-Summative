<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<?= $this->include('landing/hero_Section') ?>

<table border="1">
    <thead>
        <tr>
            <th>Flight ID</th>
            <th>Depart to</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>#</td>
            <td>a to b</td>
            <td>Domestic</td>
        </tr>
        <tr>
            td>#</td>
            <td>a to b</td>
            <td>International</td>
        </tr>
        <tr>
            <td>#</td>
            <td>a to b</td>
            <td>Domestic</td>
        </tr>
        <tr>
            <td>#</td>
            <td>a to b</td>
            <td>International</td>
        </tr>
        <tr>
            <td>#</td>
            <td>a to b</td>
            <td>Domestic</td>
        </tr>
        <tr>
            <td>#</td>
            <td>a to b</td>
            <td>International</td>
        </tr>
    </tbody>
</table>

<?= $this->endsection('contents') ?>