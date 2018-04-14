<?php

/* admin/list_image.html.twig */
class __TwigTemplate_b579dae6d4eb3ffd9347489d9bec1fc7a3106a8cbf179f4bc59b293edc74f55f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "admin/list_image.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_281c784c9e842701538019c585868b343a1db48936fdad9b6801aa175018a81e = $this->env->getExtension("native_profiler");
        $__internal_281c784c9e842701538019c585868b343a1db48936fdad9b6801aa175018a81e->enter($__internal_281c784c9e842701538019c585868b343a1db48936fdad9b6801aa175018a81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/list_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_281c784c9e842701538019c585868b343a1db48936fdad9b6801aa175018a81e->leave($__internal_281c784c9e842701538019c585868b343a1db48936fdad9b6801aa175018a81e_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_f87ce1ad48126edce4be881a4d105d4e7dc904d921d9eeb026670bb0b188c890 = $this->env->getExtension("native_profiler");
        $__internal_f87ce1ad48126edce4be881a4d105d4e7dc904d921d9eeb026670bb0b188c890->enter($__internal_f87ce1ad48126edce4be881a4d105d4e7dc904d921d9eeb026670bb0b188c890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 3
        echo "<div>
    ";
        // line 4
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath", array()) != null)) {
            // line 5
            echo "    <img height=\"40\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "webPath", array())), "html", null, true);
            echo "\">
    ";
        } else {
            // line 7
            echo "    <span>Pas de visuel</span>
    ";
        }
        // line 9
        echo "</div>
";
        
        $__internal_f87ce1ad48126edce4be881a4d105d4e7dc904d921d9eeb026670bb0b188c890->leave($__internal_f87ce1ad48126edce4be881a4d105d4e7dc904d921d9eeb026670bb0b188c890_prof);

    }

    public function getTemplateName()
    {
        return "admin/list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  51 => 7,  45 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}*/
/* {% block field %}*/
/* <div>*/
/*     {% if object.webPath != null %}*/
/*     <img height="40" src="{{ asset(object.webPath) }}">*/
/*     {% else %}*/
/*     <span>Pas de visuel</span>*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
/* */
