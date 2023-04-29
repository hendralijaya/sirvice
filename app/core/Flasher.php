<?php 

class Flasher {
    public static function setFlash($message, $action, $type)
    {
        $_SESSION['flash'] = [
            'message' => $message,
            'action'  => $action,
            'type'  => $type
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . '">
            <div class="messages">
                <p>
                    ' . $_SESSION["flash"]["message"] . ' ' . $_SESSION["flash"]["action"] . '
                </p>
            </div>
            <div class="alert-close">
                <i class="material-icons-round">close</i>
            </div>
        </div>';
            unset($_SESSION['flash']);
        }
    }
}