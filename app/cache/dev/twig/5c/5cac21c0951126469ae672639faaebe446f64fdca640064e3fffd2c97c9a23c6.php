<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_03c8a55f4b39e23673e456fdf03714a15163f23802f25746dc641ce8a376831f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d834f4434e47bb81f1a1e34eb839a07d63c87b734cc13e933fe37a45e479ee12 = $this->env->getExtension("native_profiler");
        $__internal_d834f4434e47bb81f1a1e34eb839a07d63c87b734cc13e933fe37a45e479ee12->enter($__internal_d834f4434e47bb81f1a1e34eb839a07d63c87b734cc13e933fe37a45e479ee12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_d834f4434e47bb81f1a1e34eb839a07d63c87b734cc13e933fe37a45e479ee12->leave($__internal_d834f4434e47bb81f1a1e34eb839a07d63c87b734cc13e933fe37a45e479ee12_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_ac0fb49f259efa21834a7c494a38f7ddd7c059e0204eb538ee9b3de0197db43e = $this->env->getExtension("native_profiler");
        $__internal_ac0fb49f259efa21834a7c494a38f7ddd7c059e0204eb538ee9b3de0197db43e->enter($__internal_ac0fb49f259efa21834a7c494a38f7ddd7c059e0204eb538ee9b3de0197db43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_ac0fb49f259efa21834a7c494a38f7ddd7c059e0204eb538ee9b3de0197db43e->leave($__internal_ac0fb49f259efa21834a7c494a38f7ddd7c059e0204eb538ee9b3de0197db43e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
