<?php

/* @SRVDVServer/admin/footerAdmin.html.twig */
class __TwigTemplate_3c05dddf82462b536e7c4d7aaa5d190b79960db90a397d95925d26605701a124 extends Twig_Template
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
        $__internal_277538eff9a8e3a3cb9c0c7a7fea77115f55fe6d97a0ef020bd183d80e320793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277538eff9a8e3a3cb9c0c7a7fea77115f55fe6d97a0ef020bd183d80e320793->enter($__internal_277538eff9a8e3a3cb9c0c7a7fea77115f55fe6d97a0ef020bd183d80e320793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/admin/footerAdmin.html.twig"));

        // line 1
        echo "</br></br>
<footer>
  <p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>";
        
        $__internal_277538eff9a8e3a3cb9c0c7a7fea77115f55fe6d97a0ef020bd183d80e320793->leave($__internal_277538eff9a8e3a3cb9c0c7a7fea77115f55fe6d97a0ef020bd183d80e320793_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/footerAdmin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("</br></br>
<footer>
  <p>Serveur de Voeux des Enseignants du D&eacute;partement Informatique</p>
</footer>
</body>
</html>", "@SRVDVServer/admin/footerAdmin.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\footerAdmin.html.twig");
    }
}
