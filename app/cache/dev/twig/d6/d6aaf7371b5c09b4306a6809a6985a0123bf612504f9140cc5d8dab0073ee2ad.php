<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3a86bfacbe4f9f141d7784aec8448ff62b1124bad8741fd8541c8d17eb091298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36c8985d05003b2189811904beb59d0de973c1a51893a060a2cf15b9d8d4a78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c8985d05003b2189811904beb59d0de973c1a51893a060a2cf15b9d8d4a78a->enter($__internal_36c8985d05003b2189811904beb59d0de973c1a51893a060a2cf15b9d8d4a78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36c8985d05003b2189811904beb59d0de973c1a51893a060a2cf15b9d8d4a78a->leave($__internal_36c8985d05003b2189811904beb59d0de973c1a51893a060a2cf15b9d8d4a78a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5748be8a53f6f85e5b45184fc2cce559ad82bf3c69c6aebbe65ea35ba3aa3a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5748be8a53f6f85e5b45184fc2cce559ad82bf3c69c6aebbe65ea35ba3aa3a71->enter($__internal_5748be8a53f6f85e5b45184fc2cce559ad82bf3c69c6aebbe65ea35ba3aa3a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5748be8a53f6f85e5b45184fc2cce559ad82bf3c69c6aebbe65ea35ba3aa3a71->leave($__internal_5748be8a53f6f85e5b45184fc2cce559ad82bf3c69c6aebbe65ea35ba3aa3a71_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_361505997af94bda4963d9b642a37ba30e3eeb151ae7a4e01dad3143e00ff841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361505997af94bda4963d9b642a37ba30e3eeb151ae7a4e01dad3143e00ff841->enter($__internal_361505997af94bda4963d9b642a37ba30e3eeb151ae7a4e01dad3143e00ff841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_361505997af94bda4963d9b642a37ba30e3eeb151ae7a4e01dad3143e00ff841->leave($__internal_361505997af94bda4963d9b642a37ba30e3eeb151ae7a4e01dad3143e00ff841_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09c581dd3ede1559ffde2d8375a0e6c7a612c167c18118c2e7de7d454c6ee4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c581dd3ede1559ffde2d8375a0e6c7a612c167c18118c2e7de7d454c6ee4f4->enter($__internal_09c581dd3ede1559ffde2d8375a0e6c7a612c167c18118c2e7de7d454c6ee4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09c581dd3ede1559ffde2d8375a0e6c7a612c167c18118c2e7de7d454c6ee4f4->leave($__internal_09c581dd3ede1559ffde2d8375a0e6c7a612c167c18118c2e7de7d454c6ee4f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}