<div class="frmbld-form-step-1 active">
    <div class="frgp">
        <label class="ctrl-label cls-2" for="Grantedto">Granted To</label>
        <div class="cls-10">
            <input type="text" id="Grantedto" name="Grantedto" hidden="">
            <textarea id="GrantedtoTA" name="Grantedto" required="" class="form-ctrl" rows="1"></textarea>
        </div>
    </div>
    <div class="frgp">
        <label class="ctrl-label cls-2" for="Addresss">Addresss</label>
        <div class="cls-10">
            <input type="text" id="Addresss" name="Addresss" hidden="">
            <textarea id="Addresss" name="Addresss" required="" class="form-ctrl" rows="1"></textarea>
        </div>
    </div>
    <div class="frgp">
        <label class="ctrl-label cls-2" for="since">Residence since</label>
        <div class="cls-10">
            <input type="text" id="since" name="since" hidden="">
            <textarea id="since" name="since" required="" class="form-ctrl" rows="1"></textarea>
        </div>
    </div>

    <div class="add-children-section">
        <div class="frmbld-input-flex">
            <div class="frgp">
                <label class="ctrl-label cls-2" for="child">
                    Children Name
                </label>
                <div class="cls-10">
                    <textarea id="child-0" name="child[]" required="" class="form-ctrl" rows="1"></textarea>
                </div>
            </div>
            <div class="frgp">
                <label class="ctrl-label cls-2" for="firstchildage">Child Age</label>
                <div class="cls-10">
                    <input type="text" id="firstchildage-0" name="" hidden="">
                    <textarea id="firstchildage-0" name="firstchildage[]" required="" class="form-ctrl" rows="1"></textarea>
                </div>
            </div>
        </div>
    </div>
    <button type="button" onclick="addChild()">Add Child</button>



    </div>
