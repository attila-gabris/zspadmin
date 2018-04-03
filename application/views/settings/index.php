<h5>Alap adatok</h5>
<h6>A kezdő dátum és a heti alap zsebpénz összege</h6>
<p>Ezek a beállítások visszamenőleg befolyásolják a zsebpénz összegét!</p>
<br>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered table-hover table-sm">
                <thead class="thead-light">
                <tr>
                    <th>Adat</th>
                    <th>Érték</th>
                    <th>Módosítás</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Kezdő dátum</td>
                        <td class="datum"><?= $alap['kezdo_datum'] ?></td>
                        <td><button class='btn btn-outline-dark btn-sm datum-edit' data-toggle="modal"
                    data-target="#datum-modal">Módosítás</button></td>
                    </tr>
                    <tr>
                        <td>Heti alap zsebpénz (Ft):</td>
                        <td class="alap"><?= $alap['heti_alap'] ?></td>
                        <td><button class='btn btn-outline-dark btn-sm alap-edit' data-toggle="modal"
                    data-target="#alap-modal">Módosítás</button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Datum modal -->
<div class="modal fade"  id="datum-modal" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Kezdő dátum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= validation_errors(); ?>
                <?= form_open('settings/update_datum'); ?>
                    
                    <div class="row">
                        <div class="col"><label for="datum">Kezdő dátum:</label></div>
                        <div class="col"><input type="date" name="datum" id="datum"></div>
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

<!-- Alap osszeg modal -->
<div class="modal fade"  id="alap-modal" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Heti alap zsebpénz</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= validation_errors(); ?>
                <?= form_open('settings/update_alap'); ?>
                    
                    <div class="row">
                        <div class="col"><label for="alap">Heti alap összeg (Ft):</label></div>
                        <div class="col"><input type="number" name="alap" id="alap"></div>
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