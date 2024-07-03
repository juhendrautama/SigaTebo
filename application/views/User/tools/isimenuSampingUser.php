<li class="nav-header">Unit</li>
<li class="nav-item">
    <a href="adminpanel/ProfilUnit" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('2') == 'ProfilUnit') {
                            echo "active";
                        } else {
                        } ?>">
        <i class="nav-icon fas fa-archway"></i>
        <p>
            Profil Unit Kerja
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="adminpanel/UsersGetOPD" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('2') == 'UsersGetOPD') {
                            echo "active";
                        } else {
                        } ?>">
        <i class="nav-icon fas fa-users"></i>
        <p>
            Users Unit Kerja
        </p>
    </a>
</li>
<li class="nav-header">Data</li>

<li class="nav-item">
    <a href="adminpanel/DataSigaUser" style="color:#fff;" class="nav-link 
                        <?php if ($this->uri->segment('2') == 'DataSigaUser') {
                            echo "active";
                        } else {
                        } ?>">
        <i class="nav-icon fas fa-database"></i>
        <p>
            Data SIGA
        </p>
    </a>
</li>