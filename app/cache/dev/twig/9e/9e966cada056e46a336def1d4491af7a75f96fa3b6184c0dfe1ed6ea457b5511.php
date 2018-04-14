<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_12fd2fb5ccf366ce3be6bb566261dad568c4544a330f48d38ceb25dae762a79e extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_988c5d67db970bb5b3c1d623c28b03f0b1300ff5b99e1366499a4540370dbe4e = $this->env->getExtension("native_profiler");
        $__internal_988c5d67db970bb5b3c1d623c28b03f0b1300ff5b99e1366499a4540370dbe4e->enter($__internal_988c5d67db970bb5b3c1d623c28b03f0b1300ff5b99e1366499a4540370dbe4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_988c5d67db970bb5b3c1d623c28b03f0b1300ff5b99e1366499a4540370dbe4e->leave($__internal_988c5d67db970bb5b3c1d623c28b03f0b1300ff5b99e1366499a4540370dbe4e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
