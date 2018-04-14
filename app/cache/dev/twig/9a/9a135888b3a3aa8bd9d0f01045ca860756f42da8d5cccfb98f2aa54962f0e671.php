<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_f99a3a37eb36b2f92d70b1bb4ac13e9ca122a1c87b1f73049cc551924e637340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04668b2fe066afbc5039c5f92c570ac4b1b7b216c548eefc7228ada6f072b3e4 = $this->env->getExtension("native_profiler");
        $__internal_04668b2fe066afbc5039c5f92c570ac4b1b7b216c548eefc7228ada6f072b3e4->enter($__internal_04668b2fe066afbc5039c5f92c570ac4b1b7b216c548eefc7228ada6f072b3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04668b2fe066afbc5039c5f92c570ac4b1b7b216c548eefc7228ada6f072b3e4->leave($__internal_04668b2fe066afbc5039c5f92c570ac4b1b7b216c548eefc7228ada6f072b3e4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
