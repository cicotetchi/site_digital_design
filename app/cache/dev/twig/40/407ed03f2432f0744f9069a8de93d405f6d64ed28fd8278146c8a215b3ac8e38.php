<?php

/* index.html.twig */
class __TwigTemplate_086268e031ec11adf1f3ed3cb249e8cd387aa7713d81980c9c42b4861844ec06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        $__internal_96a3fb175bad7a6551646e1b6d5a5f40f8350c626425f113ed623a03bca5a2c4 = $this->env->getExtension("native_profiler");
        $__internal_96a3fb175bad7a6551646e1b6d5a5f40f8350c626425f113ed623a03bca5a2c4->enter($__internal_96a3fb175bad7a6551646e1b6d5a5f40f8350c626425f113ed623a03bca5a2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a3fb175bad7a6551646e1b6d5a5f40f8350c626425f113ed623a03bca5a2c4->leave($__internal_96a3fb175bad7a6551646e1b6d5a5f40f8350c626425f113ed623a03bca5a2c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_935cff1c4ec6b183abcdb165b698382f85501ccb99d74a619f17733e685c2c48 = $this->env->getExtension("native_profiler");
        $__internal_935cff1c4ec6b183abcdb165b698382f85501ccb99d74a619f17733e685c2c48->enter($__internal_935cff1c4ec6b183abcdb165b698382f85501ccb99d74a619f17733e685c2c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section id=\"accueil\">
  <div class=\"accueil\">
    <div id=\"pc\" class=\"mockupDD\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/mockup_pc.png"), "html", null, true);
        echo "\" /></div>
    <div id=\"tab\" class=\"mockupDD\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/mockup_tab.png"), "html", null, true);
        echo "\" /></div>
    <div id=\"tel\" class=\"mockupDD\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/mockup_tel.png"), "html", null, true);
        echo "\" /></div>
  </div>
</section>

<section id=\"presentation\">
  <div class=\"presentation container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-10 col-md-offset-1\">
        <div class=\"row txtcenter\">
          <div class=\"col-md-12\">
            <h1>Digital Design <b>c'est quoi&nbsp;?</b></h1>
        </div>
        <div class=\"row txtcenter\">
          <div class=\"col-md-12\">
            <p>Digital Design est un club de l'ISEN Brest.</p>
          </div>
        </div>
        <div class=\"row centreVerticalement\">
          <div class=\"col-md-4\">
            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/design.png"), "html", null, true);
        echo "\"/>
          </div>
          <div class=\"col-md-8\">
            <h2>DESIGN</h2>
            <p>(n.m.) Le design consiste à réaliser. Digital Design, comme son nom l'indique est orienté design, que ce soit une réalisation de logo (<a href>à voir ici</a>) ou une maquette de site web, nous pouvons subvenir à tous vos besoins !</p>
          </div>
        </div>
        <div class=\"row centreVerticalement\">
          <div class=\"col-md-9 col-md-push-3\"> <!--col-md-push-4\"-->
            <h2>WEB</h2>
            <p>(n.m.) Le Web est un système d'accès aux ressources du réseau internet. Digital Design se veut une association du web, que ce soit par le biais de conférence, de réalisation de site web, d'aide au référencements, nous pouvons tout faire, et si l'on ne peux pas, nous apprendrons à le faire !
            </p>
          </div>
          <div class=\"col-md-3 col-md-pull-9\"> <!--col-md-push-8\"-->
            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/web.png"), "html", null, true);
        echo "\"/>
          </div>

        </div>
        <div class=\"row centreVerticalement\">
          <div class=\"col-md-4\">
            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/dev.png"), "html", null, true);
        echo "\"/>
          </div>
          <div class=\"col-md-8\">
            <h2>DÉVELOPPEMENT</h2>
            <p>(n.m.) Le Web est un système d'accès aux ressources du réseau internet. Digital Design se veut une association du web, que ce soit par le biais de conférence, de réalisation de site web, d'aide au référencements, nous pouvons tout faire, et si l'on ne peux pas, nous apprendrons à le faire !
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id=\"services\">
  <div class=\"services container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <h1><b>Services</b> proposés</h1>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"imgServices row\">
              <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/ecran.png"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"txtServices row\">
              <h2>Sites <b>WEB</b></h2>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"imgServices row\">
              <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/lunettes.png"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"txtServices row\">
              <h2><b>Visuels</b></h2>
              <p>(Logos, Affiches, ...)</p>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"imgServices row\">
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/prof.png"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"txtServices row\">
              <h2><b>Cours</b> & <b>Tutos</b></h2>
            </div>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"imgServices row\">
              <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/tel.png"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"txtServices row\">
              <h2>Applications <b>Mobile</b></h2>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"imgServices row\">
              <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/cle.png"), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"txtServices row\">
              <h2><b>Soutien</b></h2>
              <p>(Portfolio, Design, ...)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id=\"equipe\">
  <div class=\"equipe container-fluid\">
    <div class=\"col-md-8 col-md-offset-2\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h1>L'<b>équipe</b></h1>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"imgTrombi col-md-12\">
          <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/trombi.png"), "html", null, true);
        echo "\"/>
        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_935cff1c4ec6b183abcdb165b698382f85501ccb99d74a619f17733e685c2c48->leave($__internal_935cff1c4ec6b183abcdb165b698382f85501ccb99d74a619f17733e685c2c48_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 131,  176 => 108,  165 => 100,  151 => 89,  139 => 80,  128 => 72,  100 => 47,  91 => 41,  74 => 27,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* <section id="accueil">*/
/*   <div class="accueil">*/
/*     <div id="pc" class="mockupDD"><img src="{{ asset('assets/img/mockup_pc.png') }}" /></div>*/
/*     <div id="tab" class="mockupDD"><img src="{{ asset('assets/img/mockup_tab.png') }}" /></div>*/
/*     <div id="tel" class="mockupDD"><img src="{{ asset('assets/img/mockup_tel.png') }}" /></div>*/
/*   </div>*/
/* </section>*/
/* */
/* <section id="presentation">*/
/*   <div class="presentation container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-md-10 col-md-offset-1">*/
/*         <div class="row txtcenter">*/
/*           <div class="col-md-12">*/
/*             <h1>Digital Design <b>c'est quoi&nbsp;?</b></h1>*/
/*         </div>*/
/*         <div class="row txtcenter">*/
/*           <div class="col-md-12">*/
/*             <p>Digital Design est un club de l'ISEN Brest.</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="row centreVerticalement">*/
/*           <div class="col-md-4">*/
/*             <img src="{{ asset('assets/img/design.png') }}"/>*/
/*           </div>*/
/*           <div class="col-md-8">*/
/*             <h2>DESIGN</h2>*/
/*             <p>(n.m.) Le design consiste à réaliser. Digital Design, comme son nom l'indique est orienté design, que ce soit une réalisation de logo (<a href>à voir ici</a>) ou une maquette de site web, nous pouvons subvenir à tous vos besoins !</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="row centreVerticalement">*/
/*           <div class="col-md-9 col-md-push-3"> <!--col-md-push-4"-->*/
/*             <h2>WEB</h2>*/
/*             <p>(n.m.) Le Web est un système d'accès aux ressources du réseau internet. Digital Design se veut une association du web, que ce soit par le biais de conférence, de réalisation de site web, d'aide au référencements, nous pouvons tout faire, et si l'on ne peux pas, nous apprendrons à le faire !*/
/*             </p>*/
/*           </div>*/
/*           <div class="col-md-3 col-md-pull-9"> <!--col-md-push-8"-->*/
/*             <img src="{{ asset('assets/img/web.png') }}"/>*/
/*           </div>*/
/* */
/*         </div>*/
/*         <div class="row centreVerticalement">*/
/*           <div class="col-md-4">*/
/*             <img src="{{ asset('assets/img/dev.png') }}"/>*/
/*           </div>*/
/*           <div class="col-md-8">*/
/*             <h2>DÉVELOPPEMENT</h2>*/
/*             <p>(n.m.) Le Web est un système d'accès aux ressources du réseau internet. Digital Design se veut une association du web, que ce soit par le biais de conférence, de réalisation de site web, d'aide au référencements, nous pouvons tout faire, et si l'on ne peux pas, nous apprendrons à le faire !*/
/*             </p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
/* <section id="services">*/
/*   <div class="services container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">*/
/*         <div class="row">*/
/*           <div class="col-md-12">*/
/*             <h1><b>Services</b> proposés</h1>*/
/*           </div>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-md-4">*/
/*             <div class="imgServices row">*/
/*               <img src="{{ asset('assets/img/ecran.png') }}"/>*/
/*             </div>*/
/*             <div class="txtServices row">*/
/*               <h2>Sites <b>WEB</b></h2>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <div class="imgServices row">*/
/*               <img src="{{ asset('assets/img/lunettes.png') }}"/>*/
/*             </div>*/
/*             <div class="txtServices row">*/
/*               <h2><b>Visuels</b></h2>*/
/*               <p>(Logos, Affiches, ...)</p>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <div class="imgServices row">*/
/*               <img src="{{ asset('assets/img/prof.png') }}"/>*/
/*             </div>*/
/*             <div class="txtServices row">*/
/*               <h2><b>Cours</b> & <b>Tutos</b></h2>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*           <div class="col-md-4">*/
/*             <div class="imgServices row">*/
/*               <img src="{{ asset('assets/img/tel.png') }}"/>*/
/*             </div>*/
/*             <div class="txtServices row">*/
/*               <h2>Applications <b>Mobile</b></h2>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <div class="imgServices row">*/
/*               <img src="{{ asset('assets/img/cle.png') }}"/>*/
/*             </div>*/
/*             <div class="txtServices row">*/
/*               <h2><b>Soutien</b></h2>*/
/*               <p>(Portfolio, Design, ...)</p>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
/* <section id="equipe">*/
/*   <div class="equipe container-fluid">*/
/*     <div class="col-md-8 col-md-offset-2">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*           <h1>L'<b>équipe</b></h1>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="imgTrombi col-md-12">*/
/*           <img src="{{ asset('assets/img/trombi.png') }}"/>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
