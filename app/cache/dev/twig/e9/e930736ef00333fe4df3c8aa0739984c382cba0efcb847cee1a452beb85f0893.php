<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b2b0b6e619de6df0f44a34832f81d381a9bc3073938f1d86647e70360fb04437 extends Twig_Template
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
        $__internal_c43c6cab9d7f67f216cedcda08a348a26c653ba4f62b3ff07029aa303910f786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43c6cab9d7f67f216cedcda08a348a26c653ba4f62b3ff07029aa303910f786->enter($__internal_c43c6cab9d7f67f216cedcda08a348a26c653ba4f62b3ff07029aa303910f786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c43c6cab9d7f67f216cedcda08a348a26c653ba4f62b3ff07029aa303910f786->leave($__internal_c43c6cab9d7f67f216cedcda08a348a26c653ba4f62b3ff07029aa303910f786_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
