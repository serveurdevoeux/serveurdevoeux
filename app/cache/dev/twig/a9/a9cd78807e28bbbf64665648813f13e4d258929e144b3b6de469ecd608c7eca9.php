<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_13e950efc50f9a9979a25a0dfa4a60d4a557bf28df4e5de577feaf678a199693 extends Twig_Template
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
        $__internal_469a845a18905010611c4de78e1ed7f1b6a6592a78d69214a6a66ab6707c8536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469a845a18905010611c4de78e1ed7f1b6a6592a78d69214a6a66ab6707c8536->enter($__internal_469a845a18905010611c4de78e1ed7f1b6a6592a78d69214a6a66ab6707c8536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_469a845a18905010611c4de78e1ed7f1b6a6592a78d69214a6a66ab6707c8536->leave($__internal_469a845a18905010611c4de78e1ed7f1b6a6592a78d69214a6a66ab6707c8536_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
