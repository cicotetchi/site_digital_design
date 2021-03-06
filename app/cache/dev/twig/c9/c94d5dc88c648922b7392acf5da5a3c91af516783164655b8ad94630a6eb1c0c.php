<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_ba339d8dfab0cd98171f505ae97e13a5e3c733cec551fe7989a374815100300c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:Core:dashboard.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58dd6446b695b6a99a0441bf2c9483530691f05938666353ce52ebb1a5938aef = $this->env->getExtension("native_profiler");
        $__internal_58dd6446b695b6a99a0441bf2c9483530691f05938666353ce52ebb1a5938aef->enter($__internal_58dd6446b695b6a99a0441bf2c9483530691f05938666353ce52ebb1a5938aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:dashboard.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58dd6446b695b6a99a0441bf2c9483530691f05938666353ce52ebb1a5938aef->leave($__internal_58dd6446b695b6a99a0441bf2c9483530691f05938666353ce52ebb1a5938aef_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_d37c22928095ac24cec596539ad89c90383b5b6d2b80f89e0b4ec5affe2e65b8 = $this->env->getExtension("native_profiler");
        $__internal_d37c22928095ac24cec596539ad89c90383b5b6d2b80f89e0b4ec5affe2e65b8->enter($__internal_d37c22928095ac24cec596539ad89c90383b5b6d2b80f89e0b4ec5affe2e65b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_d37c22928095ac24cec596539ad89c90383b5b6d2b80f89e0b4ec5affe2e65b8->leave($__internal_d37c22928095ac24cec596539ad89c90383b5b6d2b80f89e0b4ec5affe2e65b8_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b8f92bf6d07c991ec7c041441c568560789ea10091a2566ca978592a62973ca1 = $this->env->getExtension("native_profiler");
        $__internal_b8f92bf6d07c991ec7c041441c568560789ea10091a2566ca978592a62973ca1->enter($__internal_b8f92bf6d07c991ec7c041441c568560789ea10091a2566ca978592a62973ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_b8f92bf6d07c991ec7c041441c568560789ea10091a2566ca978592a62973ca1->leave($__internal_b8f92bf6d07c991ec7c041441c568560789ea10091a2566ca978592a62973ca1_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_73338dbe25f9c2d24e3f80def23f84a0181d78433699f1210508f11266a55381 = $this->env->getExtension("native_profiler");
        $__internal_73338dbe25f9c2d24e3f80def23f84a0181d78433699f1210508f11266a55381->enter($__internal_73338dbe25f9c2d24e3f80def23f84a0181d78433699f1210508f11266a55381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
    ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")))));
        echo "

    ";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top", array())) > 0)) {
            // line 21
            echo "        <div class=\"row\">
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "top", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 23
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                echo "\">
                    ";
                // line 24
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </div>
    ";
        }
        // line 29
        echo "
    <div class=\"row\">
        ";
        // line 31
        $context["has_center"] = false;
        // line 32
        echo "
        <div class=\"";
        // line 33
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array())) > 0)) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "left", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 35
            echo "                ";
            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>

        ";
        // line 39
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array())) > 0)) {
            // line 40
            echo "            <div class=\"col-md-4\">
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 42
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </div>
        ";
        }
        // line 46
        echo "
        <div class=\"";
        // line 47
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "center", array())) > 0)) {
            echo "col-md-4";
        } else {
            echo "col-md-6";
        }
        echo "\">
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "right", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 49
            echo "                ";
            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
    </div>

    ";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom", array())) > 0)) {
            // line 55
            echo "        <div class=\"row\">
            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "bottom", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 57
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                echo "\">
                    ";
                // line 58
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </div>
    ";
        }
        // line 63
        echo "


    ";
        // line 66
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => (isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")))));
        echo "

";
        
        $__internal_73338dbe25f9c2d24e3f80def23f84a0181d78433699f1210508f11266a55381->leave($__internal_73338dbe25f9c2d24e3f80def23f84a0181d78433699f1210508f11266a55381_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 66,  211 => 63,  207 => 61,  198 => 58,  193 => 57,  189 => 56,  186 => 55,  184 => 54,  179 => 51,  170 => 49,  166 => 48,  158 => 47,  155 => 46,  151 => 44,  142 => 42,  138 => 41,  135 => 40,  133 => 39,  129 => 37,  120 => 35,  116 => 34,  108 => 33,  105 => 32,  103 => 31,  99 => 29,  95 => 27,  86 => 24,  81 => 23,  77 => 22,  74 => 21,  72 => 20,  67 => 18,  64 => 17,  58 => 16,  47 => 15,  35 => 14,  20 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block title %}{{ 'title_dashboard'|trans({}, 'SonataAdminBundle') }}{% endblock%}*/
/* {% block breadcrumb %}{% endblock %}*/
/* {% block content %}*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.dashboard.top', { 'admin_pool': admin_pool }) }}*/
/* */
/*     {% if blocks.top|length > 0 %}*/
/*         <div class="row">*/
/*             {% for block in blocks.top %}*/
/*                 <div class="{{ block.class }}">*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         {% set has_center = false %}*/
/* */
/*         <div class="{% if blocks.center|length > 0 %}col-md-4{% else %}col-md-6{% endif %}">*/
/*             {% for block in blocks.left %}*/
/*                 {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/*         {% if blocks.center|length > 0 %}*/
/*             <div class="col-md-4">*/
/*                 {% for block in blocks.center %}*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="{% if blocks.center|length > 0 %}col-md-4{% else %}col-md-6{% endif %}">*/
/*             {% for block in blocks.right %}*/
/*                 {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if blocks.bottom|length > 0 %}*/
/*         <div class="row">*/
/*             {% for block in blocks.bottom %}*/
/*                 <div class="{{ block.class }}">*/
/*                     {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/* */
/*     {{ sonata_block_render_event('sonata.admin.dashboard.bottom', { 'admin_pool': admin_pool }) }}*/
/* */
/* {% endblock %}*/
/* */
