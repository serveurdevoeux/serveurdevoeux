<?php

/* ::base.html.twig */
class __TwigTemplate_d6fbd1c5645777ebdb56f0091dd9deaf76580cd610d812a9ec40e42b205a6098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e72c35bd5c8e78e357a55dfe3ba9a29f85f5809e9b4b4e386ebebf9cb1d3cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e72c35bd5c8e78e357a55dfe3ba9a29f85f5809e9b4b4e386ebebf9cb1d3cff->enter($__internal_8e72c35bd5c8e78e357a55dfe3ba9a29f85f5809e9b4b4e386ebebf9cb1d3cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8e72c35bd5c8e78e357a55dfe3ba9a29f85f5809e9b4b4e386ebebf9cb1d3cff->leave($__internal_8e72c35bd5c8e78e357a55dfe3ba9a29f85f5809e9b4b4e386ebebf9cb1d3cff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_86b0c7c830965459010b9d465f273f5bfe28d2b1e60efc2ba658e2f3e34d7322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b0c7c830965459010b9d465f273f5bfe28d2b1e60efc2ba658e2f3e34d7322->enter($__internal_86b0c7c830965459010b9d465f273f5bfe28d2b1e60efc2ba658e2f3e34d7322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_86b0c7c830965459010b9d465f273f5bfe28d2b1e60efc2ba658e2f3e34d7322->leave($__internal_86b0c7c830965459010b9d465f273f5bfe28d2b1e60efc2ba658e2f3e34d7322_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21ec1a67b40ba0097967b98fe33a8537287863063c72e625a8285cc602db505c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ec1a67b40ba0097967b98fe33a8537287863063c72e625a8285cc602db505c->enter($__internal_21ec1a67b40ba0097967b98fe33a8537287863063c72e625a8285cc602db505c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_21ec1a67b40ba0097967b98fe33a8537287863063c72e625a8285cc602db505c->leave($__internal_21ec1a67b40ba0097967b98fe33a8537287863063c72e625a8285cc602db505c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8db57e09aeb7f41ec7a9d78c11104a784f14d05c21bb0bce3dab32adf05e50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8db57e09aeb7f41ec7a9d78c11104a784f14d05c21bb0bce3dab32adf05e50b->enter($__internal_a8db57e09aeb7f41ec7a9d78c11104a784f14d05c21bb0bce3dab32adf05e50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8db57e09aeb7f41ec7a9d78c11104a784f14d05c21bb0bce3dab32adf05e50b->leave($__internal_a8db57e09aeb7f41ec7a9d78c11104a784f14d05c21bb0bce3dab32adf05e50b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7468b488412adeb8751492477eda3c0f239e49ebeac7f88e72e64b372f1669a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7468b488412adeb8751492477eda3c0f239e49ebeac7f88e72e64b372f1669a9->enter($__internal_7468b488412adeb8751492477eda3c0f239e49ebeac7f88e72e64b372f1669a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7468b488412adeb8751492477eda3c0f239e49ebeac7f88e72e64b372f1669a9->leave($__internal_7468b488412adeb8751492477eda3c0f239e49ebeac7f88e72e64b372f1669a9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\serveurDeVoeux\\app/Resources\\views/base.html.twig");
    }
}
