<h5>Tantárgyak</h5>
<h6>A lista bővíthető, a tantárgyak neve módosítható, de törölni nem lehet.</h6>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <br>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                    data-target="#ujmodal">Új tantárgy felvitele
            </button>
            <br><br>

            <table class="table table-bordered table-hover table-sm">
                <thead class="thead-light">
                <tr>
                    <th>Azonosító</th>
                    <th>Tantárgy</th>
                    <th>Módosítás</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($targy as $targy_item): ?>
                    <tr>
                        <td class="targy-id"><?= $targy_item['id'] ?></td>
                        <td class="targy-nev"><?= $targy_item['targy_nev'] ?></td>
                        <td><button class='btn btn-outline-dark btn-sm targy-edit' data-toggle="modal"
                    data-target="#edit-modal">Módosítás</button></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Uj modal -->
<div class="modal fade"  id="ujmodal" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Új tantárgy felvitele</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= validation_errors(); ?>
                <?= form_open('settings/create_targy'); ?>
                    <div class="row">
                        <div class="col"><label for="targy">Tantárgy neve:</label></div>
                        <div class="col"><input type="text" name="targy"></div>
                    </div>
                    <br><br>
                    <p class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezárás</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Mentés">
                    </p>
                    
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Modositas modal -->
<div class="modal fade"  id="edit-modal" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Tantárgy módosítása</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= validation_errors(); ?>
                <?= form_open('settings/update_targy'); ?>
                    <input type="hidden" name="id" id="targy-id">
                    
                    <div class="row">
                        <div class="col"><label for="targy">Tantárgy neve:</label></div>
                        <div class="col"><input type="text" name="targy" id="targy-nev"></div>
                    </div>
                    <br><br>
                    <p class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezárás</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Mentés">
                    </p>
                    
                </form>

            </div>
        </div>
    </div>
</div>
