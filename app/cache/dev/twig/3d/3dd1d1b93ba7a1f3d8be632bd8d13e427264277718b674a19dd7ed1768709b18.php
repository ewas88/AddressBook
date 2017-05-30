<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b95cc0152d3e5d09a8abbb2b1fb12cba3170b84b9589d72d9f0ab6c2455e4475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e08491c5ebf5631465dcfd20d36144a62a6fdf4d021f259dccc5e7a7cf8de16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e08491c5ebf5631465dcfd20d36144a62a6fdf4d021f259dccc5e7a7cf8de16->enter($__internal_7e08491c5ebf5631465dcfd20d36144a62a6fdf4d021f259dccc5e7a7cf8de16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e08491c5ebf5631465dcfd20d36144a62a6fdf4d021f259dccc5e7a7cf8de16->leave($__internal_7e08491c5ebf5631465dcfd20d36144a62a6fdf4d021f259dccc5e7a7cf8de16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b61d54ca87c03361f7364727ba3b76d6f2aef09320e5af366c54649f051d1263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61d54ca87c03361f7364727ba3b76d6f2aef09320e5af366c54649f051d1263->enter($__internal_b61d54ca87c03361f7364727ba3b76d6f2aef09320e5af366c54649f051d1263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b61d54ca87c03361f7364727ba3b76d6f2aef09320e5af366c54649f051d1263->leave($__internal_b61d54ca87c03361f7364727ba3b76d6f2aef09320e5af366c54649f051d1263_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_74eeec5a38da0f668d8f609da58e6a6d067e1f59d91ad58ba02ca3eff6e2e9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74eeec5a38da0f668d8f609da58e6a6d067e1f59d91ad58ba02ca3eff6e2e9d7->enter($__internal_74eeec5a38da0f668d8f609da58e6a6d067e1f59d91ad58ba02ca3eff6e2e9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_74eeec5a38da0f668d8f609da58e6a6d067e1f59d91ad58ba02ca3eff6e2e9d7->leave($__internal_74eeec5a38da0f668d8f609da58e6a6d067e1f59d91ad58ba02ca3eff6e2e9d7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1dc3de8adbf6674c369f824a2f67cfcc7c601d803004d5d70bdf532e6011a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1dc3de8adbf6674c369f824a2f67cfcc7c601d803004d5d70bdf532e6011a04->enter($__internal_b1dc3de8adbf6674c369f824a2f67cfcc7c601d803004d5d70bdf532e6011a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b1dc3de8adbf6674c369f824a2f67cfcc7c601d803004d5d70bdf532e6011a04->leave($__internal_b1dc3de8adbf6674c369f824a2f67cfcc7c601d803004d5d70bdf532e6011a04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
