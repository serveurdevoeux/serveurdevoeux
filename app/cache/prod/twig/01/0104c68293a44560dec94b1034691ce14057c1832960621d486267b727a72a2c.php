<?php

/* SRVDVServerBundle:admin:TypeAdmin.html.twig */
class __TwigTemplate_c7453157758398f553f0e70f76fe9c651a5c2ff0f701994669fdc89cea3f25fa extends Twig_Template
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
        $__internal_57a41bdf66d720e80333b1272917d834951c8b1ca6f1a6555c2e18869aa442b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a41bdf66d720e80333b1272917d834951c8b1ca6f1a6555c2e18869aa442b0->enter($__internal_57a41bdf66d720e80333b1272917d834951c8b1ca6f1a6555c2e18869aa442b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SRVDVServerBundle:admin:TypeAdmin.html.twig"));

        // line 1
        echo "<html>
  ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SRVDVServerBundle:Default:nombreInscription", array("id" => 44)));
        echo "
  
  ";
        // line 4
        if (((isset($context["supprimer"]) ? $context["supprimer"] : $this->getContext($context, "supprimer")) == 0)) {
            // line 5
            echo "        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer ce Statut 
                  Il est rataché à un Utilisateur!!
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      ";
        }
        // line 22
        echo "  
  <div align=\"center\">
    </br>
    <div class=\" centreVerticalement\">\t  
      ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter un statut:</legend>
        <div class=\"form-group\">
          ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "code", array()), 'label', array("label" => "Code : "));
        echo "
          ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'label', array("label" => "Libelle : "));
        echo "
          ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbrHeures", array()), 'label', array("label" => "Nombre heures : "));
        echo "
          ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nbrHeures", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "
        </div>
      </fieldset>
      ";
        // line 45
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "\t\t
    </div>
    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Codes</th><th>Libelles</th><th>Nombre d'heures</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Types"]) ? $context["Types"] : $this->getContext($context, "Types")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 55
            echo "              <tr>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "code", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "libelle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nbrHeures", array()), "html", null, true);
            echo "</td>
                <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_TypeUtilisateur", array("id" => $this->getAttribute($context["t"], "id", array()))), "html", null, true);
            echo "'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                <td>
                  <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "\" >
                    <b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b>
                  </button>
                  <div id=\"myModal";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Vous voulez vraiment supprimer ce Statut ?</ut>
                        </div>
                        <div class=\"modal-footer\">
                          <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_statut_admin", array("id" => $this->getAttribute($context["t"], "id", array()))), "html", null, true);
            echo "'\"><b >Delete ! </b></button>
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                        </div>
                      </div>
                    </div>
                   </div>
                </td>
              </tr>\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "          </tbody>
        </table> 
      </div>
    </div>

  </div>




  <script>
    \$(document).ready(function () {
      \$('#example').DataTable();
    });

    function SupprimerType(id) {

      var rep = confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur');

      if (rep) {
        window.location.href = 'suppType/' + id;
      }

    }
  </script>
  ";
        // line 107
        $this->loadTemplate("SRVDVServerBundle:admin:footerAdmin.html.twig", "SRVDVServerBundle:admin:TypeAdmin.html.twig", 107)->display($context);
        
        $__internal_57a41bdf66d720e80333b1272917d834951c8b1ca6f1a6555c2e18869aa442b0->leave($__internal_57a41bdf66d720e80333b1272917d834951c8b1ca6f1a6555c2e18869aa442b0_prof);

    }

    public function getTemplateName()
    {
        return "SRVDVServerBundle:admin:TypeAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 107,  169 => 82,  154 => 73,  142 => 64,  136 => 61,  131 => 59,  127 => 58,  123 => 57,  119 => 56,  116 => 55,  112 => 54,  100 => 45,  94 => 42,  88 => 39,  84 => 38,  78 => 35,  74 => 34,  68 => 31,  64 => 30,  57 => 26,  51 => 22,  32 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
  {{ render (controller(\"SRVDVServerBundle:Default:nombreInscription\", { 'id': 44 })) }}
  
  {% if supprimer == 0  %}
        <input id=\"iddudiv\" type=\"hidden\"   data-toggle=\"modal\" data-target=\"#myModalEnvoiEmail\" />
        <div id=\"myModalEnvoiEmail\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                  Impossible de supprimer ce Statut 
                  Il est rataché à un Utilisateur!!
              </div>
            </div>
          </div>
        </div>
        <script>
          document.getElementById('iddudiv').click();
        </script>
      {% endif %}
  
  <div align=\"center\">
    </br>
    <div class=\" centreVerticalement\">\t  
      {{ form_start(f,{'attr':{'novalidate':'novalidate'}})}}
      <fieldset class=\"well the-fieldset\">
        <legend > Ajouter un statut:</legend>
        <div class=\"form-group\">
          {{ form_label(f.code,'Code : ')}}
          {{ form_widget(f.code,{'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"form-group\">
          {{ form_label(f.libelle,'Libelle : ')}}
          {{ form_widget(f.libelle,{'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"form-group\">
          {{ form_label(f.nbrHeures,'Nombre heures : ')}}
          {{ form_widget(f.nbrHeures,{'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"form-group\">
          {{ form_widget(f.save,{'attr':{'class':'btn btn-success'}})}}
        </div>
      </fieldset>
      {{ form_end(f)}}\t\t
    </div>
    <div class=\" centreVerticalement\">
      <div class=\"table-responsive\">
        <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" >
          <thead>
            <tr><th>Codes</th><th>Libelles</th><th>Nombre d'heures</th><th>Modifier</th><th>Supprimer</th></tr>
          </thead>
          <tbody>
            {% for t in Types %}
              <tr>
                <td>{{ t.code }}</td>
                <td>{{ t.libelle }}</td>
                <td>{{ t.nbrHeures }}</td>
                <td><button  type=\"button\" class=\"btn btn-primary\" onclick=\"window.location.href = '{{path('Modifier_TypeUtilisateur',{'id':t.id }) }}'\"><b ><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></b></button></td>
                <td>
                  <button type=\"button\" class=\"btn btn-warning\"  data-toggle=\"modal\" data-target=\"#myModal{{ t.id }}\" >
                    <b><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></b>
                  </button>
                  <div id=\"myModal{{ t.id }}\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                      <!-- Modal content-->
                      <div class=\"modal-content\">
                        <div class=\"modal-header\">
                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                          <h4 class=\"modal-title\">Vous voulez vraiment supprimer ce Statut ?</ut>
                        </div>
                        <div class=\"modal-footer\">
                          <button  type=\"button\" class=\"btn btn-danger\" onclick=\"window.location.href = '{{ path('supprimer_statut_admin',{'id':t.id }) }}'\"><b >Delete ! </b></button>
                          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                        </div>
                      </div>
                    </div>
                   </div>
                </td>
              </tr>\t
            {% endfor %}
          </tbody>
        </table> 
      </div>
    </div>

  </div>




  <script>
    \$(document).ready(function () {
      \$('#example').DataTable();
    });

    function SupprimerType(id) {

      var rep = confirm('Clickez sur \"OK\" si vous voulez vraiment cet utilisateur');

      if (rep) {
        window.location.href = 'suppType/' + id;
      }

    }
  </script>
  {% include \"SRVDVServerBundle:admin:footerAdmin.html.twig\" %}", "SRVDVServerBundle:admin:TypeAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeuxOmar\\src\\SRVDV\\ServerBundle/Resources/views/admin/TypeAdmin.html.twig");
    }
}
