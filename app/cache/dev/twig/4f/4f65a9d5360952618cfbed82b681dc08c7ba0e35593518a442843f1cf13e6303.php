<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_f2f5a03aba299cadc5f0e6bfd2a155c3f3e3226d8bf1139043507c14aa7af935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4495d7ce5160a0b5bb227efa5fe810dccb8684f640bd74584c7edc45c93ef259 = $this->env->getExtension("native_profiler");
        $__internal_4495d7ce5160a0b5bb227efa5fe810dccb8684f640bd74584c7edc45c93ef259->enter($__internal_4495d7ce5160a0b5bb227efa5fe810dccb8684f640bd74584c7edc45c93ef259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4495d7ce5160a0b5bb227efa5fe810dccb8684f640bd74584c7edc45c93ef259->leave($__internal_4495d7ce5160a0b5bb227efa5fe810dccb8684f640bd74584c7edc45c93ef259_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
