<h5>Osztályzatok értéke</h5>
<h6>Itt lehet beállítani, hogy az egyes osztályzatok mennyivel módosítják a zsebpénz összegét.</h6>
<p>A paraméter módosítása visszamenőleg nem befolyásolja az egyes osztályzatok hatását a zsebpénz összegére.</p>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered table-hover table-sm">
                <thead class="thead-light">
                <tr>
                    <th>Osztályzat</th>
                    <th>Összeg</th>
                    <th>Módosítás</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($ertek as $ertek_item): ?>
                    <tr>
                        <td class="ertek-osztalyzat"><?= $ertek_item['osztalyzat'] ?></td>
                        <td class="ertek-zsebpenz"><?= $ertek_item['zsebpenz'] ?></td>
                        <td><button class='btn btn-outline-dark btn-sm ertek-edit' data-toggle="modal"
                    data-target="#modal">Módosítás</button></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade"  id="modal" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Módosítás</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?= validation_errors(); ?>
                <?= form_open('settings/update_ertek'); ?>
                    
                    <div class="row">
                        <div class="col"><label for="osztalyzat">Osztályzat:</label></div>
                        <div class="col"><input type="text" name="osztalyzat" id="ertek-osztalyzat" readonly></div>
                    </div>
                    <div class="row">
                        <div class="col"><label for="zsebpenz">Értéke:</label></div>
                        <div class="col"><input type="text" name="zsebpenz" id="ertek-zsebpenz"></div>
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