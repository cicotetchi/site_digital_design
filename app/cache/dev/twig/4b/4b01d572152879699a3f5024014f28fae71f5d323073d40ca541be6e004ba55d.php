<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_ca15b558a7441d59395abd590fe0afe5ddef27725ee74beeb45b4ec614e87e13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5cbec2337a9e36bad5ea0b3c2f40babee093029b0381659337071f9c8b5f31a = $this->env->getExtension("native_profiler");
        $__internal_b5cbec2337a9e36bad5ea0b3c2f40babee093029b0381659337071f9c8b5f31a->enter($__internal_b5cbec2337a9e36bad5ea0b3c2f40babee093029b0381659337071f9c8b5f31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_b5cbec2337a9e36bad5ea0b3c2f40babee093029b0381659337071f9c8b5f31a->leave($__internal_b5cbec2337a9e36bad5ea0b3c2f40babee093029b0381659337071f9c8b5f31a_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
