<?php

class MY_Loader extends CI_Loader {

    public function template($template_name, $vars = array(), $return = FALSE) {
        if ($return):
            $content = $this->view('front/common/header', $vars, $return);
            $content .= $this->view("front/".$template_name, $vars, $return);
            $content .= $this->view('front/common/footer', $vars, $return);

            return $content;
        else:
            $this->view('front/common/header', $vars);
            $this->view("front/".$template_name, $vars);
            $this->view('front/common/footer', $vars);
        endif;
    }
    
    
    public function admintemplate($template_name, $vars = array(), $return = FALSE) {
        if ($return):
            $content = $this->view('admin/common/header', $vars, $return);
            $content .= $this->view("admin/".$template_name, $vars, $return);
            $content .= $this->view('admin/common/footer', $vars, $return);

            return $content;
        else:
            $this->view('admin/common/header', $vars);
            $this->view("admin/".$template_name, $vars);
            $this->view('admin/common/footer', $vars);
        endif;
    }
}
