<?php
/*
    ==================================
        SDS_INFO CLASS
        klasa nadpisująca WP_Customize_Control
    ==================================
*/

//Separatory do customaizera ( label z obramowaniem )
class SDS_Info extends WP_Customize_Control {
    public $type = 'info';
    public $label = '';
    public function render_content() {
    ?>
        <h3 style="margin-top:30px;border:1px solid;padding:5px;color:#58719E;text-transform:uppercase;"><?php echo esc_html( $this->label ); ?></h3>
    <?php
    }
}