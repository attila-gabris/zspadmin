<h5>Osztályzat típusok</h5>
<h6>A lista bővíthető, a tantárgyak neve módosítható, de törölni nem lehet.
    Itt lehet beállítani a a típusokhoz tartozó szorzó értékét is.</h6>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">

            <br>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                    data-target="#ujmodal">Új típus felvitele
            </button>
            <br><br>

            <table class="table table-bordered table-hover table-sm">
                <thead class="thead-light">
                <tr>
                    <th>Azonosító</th>
                    <th>Osztályzat típus</th>
                    <th>Szorzó</th>
                    <th>Módosítás</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tipus as $tipus_item): ?>
                    <tr>
                        <td class="tipus-id"><?= $tipus_item['id'] ?></td>
                        <td class="tipus-nev"><?= $tipus_item['osztalyzat_tipus_nev'] ?></td>
                        <td class="tipus-szorzo"><?= $tipus_item['szorzo'] ?></td>
                        <td><button class='btn btn-outline-dark btn-sm tipus-edit' data-toggle="modal"
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
            <h5 class="modal-title" id="editModalLabel">Új típus felvitele</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= validation_errors(); ?>
                <?= form_open('settings/create_tipus'); ?>
                    <div class="row">
                        <div class="col"><label for="tipus">Típus neve:</label></div>
                        <div class="col"><input type="text" name="tipus"></div>
                    </div> 
                    <div class="row">
                        <div class="col"><label for="szorzo">Szorzó:</label></div>
                        <div class="col"><input type="number" name="szorzo" value="1" step="0.01"></div>
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
            <h5 class="modal-title" id="editModalLabel">Típus módosítása</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= validation_errors(); ?>
                <?= form_open('settings/update_tipus'); ?>
                    <input type="hidden" name="id" id="tipus-id">
                    
                    <div class="row">
                        <div class="col"><label for="tipus">Típus neve:</label></div>
                        <div class="col"><input type="text" name="tipus" id="tipus-nev"></div>
                    </div>
                    <div class="row">
                        <div class="col"><label for="szorzo">Szorzó:</label></div>
                        <div class="col"><input type="number" name="szorzo" value="1" step="0.01" id="tipus-szorzo"></div>
                        
                        <br>
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
