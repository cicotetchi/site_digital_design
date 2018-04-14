<?php

/* contact.html.twig */
class __TwigTemplate_fd03ae3429a5be8754721969478c3baa7dcefaef1f5bb2300981819e23e7879d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f3893ecba97962446c03486b890e47ebb3c6406e77239e4b91b60031522585b = $this->env->getExtension("native_profiler");
        $__internal_8f3893ecba97962446c03486b890e47ebb3c6406e77239e4b91b60031522585b->enter($__internal_8f3893ecba97962446c03486b890e47ebb3c6406e77239e4b91b60031522585b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f3893ecba97962446c03486b890e47ebb3c6406e77239e4b91b60031522585b->leave($__internal_8f3893ecba97962446c03486b890e47ebb3c6406e77239e4b91b60031522585b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50fdd479484612b64d309858809adead3830d9ac5a9aba04595305e1bde565e1 = $this->env->getExtension("native_profiler");
        $__internal_50fdd479484612b64d309858809adead3830d9ac5a9aba04595305e1bde565e1->enter($__internal_50fdd479484612b64d309858809adead3830d9ac5a9aba04595305e1bde565e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section>
  <div class=\"row\">

    <div class=\"col-xs-offset-3 col-xs-6 col-xs-offset-3 col-sm-offset-3 col-sm-6 col-sm-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-lg-offset-3 col-lg-6 col-lg-offset-3 \">
    <h1 class=\"centre\">Nous <strong>contacter</strong></h1>

    ";
        // line 10
        if (array_key_exists("valide", $context)) {
            // line 11
            echo "      ";
            if ((isset($context["valide"]) ? $context["valide"] : $this->getContext($context, "valide"))) {
                // line 12
                echo "        <div class=\"alert alert-success\" role=\"alert\">Votre message a bien été envoyé</div>
      ";
            } else {
                // line 14
                echo "        <div class=\"alert alert-danger\" role=\"alert\">Il y a eu une problème lors de l'envoi de votre message</div>
      ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      <div class=\"form-group\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Prénom Nom"));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
      <div class=\"form-group\">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Adresse mail"));
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>

      <div class=\"form-group\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomProjet", array()), 'label', array("label" => "Nom du projet"));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomProjet", array()), 'errors', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomProjet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>

      <div class=\"form-group\">
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'label', array("label" => "Description"));
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'errors', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>

      <div class=\"form-group\">
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-default center-block")));
        echo "
      </div>
    ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
  </div>
</section>
";
        
        $__internal_50fdd479484612b64d309858809adead3830d9ac5a9aba04595305e1bde565e1->leave($__internal_50fdd479484612b64d309858809adead3830d9ac5a9aba04595305e1bde565e1_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 45,  131 => 43,  124 => 39,  120 => 38,  116 => 37,  109 => 33,  105 => 32,  101 => 31,  94 => 27,  90 => 26,  86 => 25,  80 => 22,  76 => 21,  72 => 20,  67 => 18,  64 => 17,  61 => 16,  57 => 14,  53 => 12,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* <section>*/
/*   <div class="row">*/
/* */
/*     <div class="col-xs-offset-3 col-xs-6 col-xs-offset-3 col-sm-offset-3 col-sm-6 col-sm-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-lg-offset-3 col-lg-6 col-lg-offset-3 ">*/
/*     <h1 class="centre">Nous <strong>contacter</strong></h1>*/
/* */
/*     {% if valide is defined %}*/
/*       {% if valide %}*/
/*         <div class="alert alert-success" role="alert">Votre message a bien été envoyé</div>*/
/*       {% else %}*/
/*         <div class="alert alert-danger" role="alert">Il y a eu une problème lors de l'envoi de votre message</div>*/
/*       {% endif %}*/
/*     {% endif %}*/
/* */
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal'} }) }}*/
/*       <div class="form-group">*/
/*         {{ form_label(form.nom, "Prénom Nom") }}*/
/*         {{ form_errors(form.nom) }}*/
/*         {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*       <div class="form-group">*/
/*         {{ form_label(form.email, "Adresse mail") }}*/
/*         {{ form_errors(form.email) }}*/
/*         {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         {{ form_label(form.nomProjet, "Nom du projet") }}*/
/*         {{ form_errors(form.nomProjet, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_widget(form.nomProjet, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         {{ form_label(form.message, "Description") }}*/
/*         {{ form_errors(form.message, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_widget(form.message, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         {{ form_widget(form.submit, {'attr': {'class': 'btn btn-default center-block'}}) }}*/
/*       </div>*/
/*     {{ form_end(form) }}*/
/* */
/*     </div>*/
/*   </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
