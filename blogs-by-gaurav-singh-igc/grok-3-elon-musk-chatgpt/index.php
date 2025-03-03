<?php
$RunningDir = "../..";
include $RunningDir . "/config.php";
$ServiceId = "blog159";

?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo APP_BLOGS[$ServiceId]['title']; ?> @ <?php echo APP['APP_NAME']; ?> Blogs</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <?php include $RunningDir . "/assets/HeaderStylesheets.php"; ?>
    <?php include __DIR__ . "/../sections/MetaHeaderTags.php"; ?>
</head>

<body class="white-version template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">
    <?php include $RunningDir . "/includes/PageHeader.php"; ?>
    <?php include $RunningDir . "/blogs-by-gaurav-singh-igc/sections/BlogHeaderSections.php"; ?>

    <div>
        <h1>🎨 Grok 3 is free: 5 things we tried with Elon Musk’s answer to ChatGPT</h1>

        <p>🖼️ Grok 3 comes with DeepSearch, Thinking, and image generation capabilities. (AI-generated image using Grok)</p>

        <p>💡 Elon Musk’s xAI recently launched its frontier AI model—Grok 3. Dubbed as "the world’s smartest AI," Grok 3 is far more capable than its predecessors. According to the company, it brings together strong reasoning and extensive pretrained knowledge.</p>

        <p>🔧 The AI model has been trained on xAI’s proprietary Colossus supercomputer cluster that possesses over 100,000 Nvidia Hopper GPUs. According to the makers, Grok 3 has shown significant improvements in reasoning, coding, mathematics, general knowledge, and tasks that require it to follow instructions. xAI has refined the chatbot’s reasoning abilities through large-scale reinforcement learning, which allows it to think for about a few seconds to minutes, mulling over the prompt before responding.</p>

        <p>📈 The latest AI model from xAI has shown some stellar results across academic and real-world user benchmarks. Now, Grok 3 is available for all to try. Below is a compilation of things we tried with Elon Musk’s ChatGPT rival.</p>

        <h2>🎨 Interface</h2>

        <p>🔍 Much like DeepSeek-R1 and OpenAI’s ChatGPT, the homepage of Grok 3 has the input right at the centre, and it displays options— Attach file, DeepSearch, and Think on the left side, and AI model picker and Enter options on the right. From the start, it is evident that a reasoning model has been embedded into it. Users can easily switch between standard AI functions and the "reasoning mode".</p>

        <ul>
            <li>🔎 Temporary chat mode: Allows users to access a conversation mode where their chat history is not saved, and everything is deleted within 30 days.</li>
            <li>🔄 Options at the bottom of the input window: Research, Brainstorm, Analyse Data, Create Images, and Code, showcasing the versatility of the model.</li>
            <li>🌐 Enable Search option: Lets users activate the web search feature for Grok 3.</li>
        </ul>

        <h2>🧠 Research Capabilities</h2>

        <p>🔬 To try the DeepSearch capabilities, I used a prompt related to the conservation of house sparrows in India. I began my research by using the prompt, "What is the state of the species House Sparrow in India?" Within 46 seconds, the chatbot scoured 101 sources and presented information. Similar to DeepSeek-R1, one could see the thinking process here too, the same self-talk and evaluation as seen in humans when answering questions.</p>

        <p>📄 Grok 3 produced a detailed report with key points, an overview, a conservation status, and causes for decline, a legal framework, complete with key citations.</p>

        <h2>🎨 Image Generation and Analysis</h2>

        <p>🖼️ Grok 3 is capable of generating hyperrealistic images. The chatbot instantly creates images that can be further refined based on the need. Also, it offers four options at a time and instant customisation options at the bottom. With image generations, Grok 3 is handy. However, the same cannot be said for its image analysis capabilities.</p>

        <ul>
            <li>🖼️ First test: Uploaded a vintage poster of a Malayalam film, "Sreekrishnapurathe Nakshathrathilakkam." The chatbot identified the language but misinterpreted the name of the film.</li>
            <li>📸 Second test: Uploaded an old photograph of Macintosh SE, and Grok 3 correctly identified the object in the picture.</li>
        </ul>

        <h2>🎨 Playing Riddles</h2>

        <p>🧩 As part of this hands-on, I tried using some age-old riddles that have been dubbed as the toughest on the internet. While ChatGPT was engaging with motivational emojis with each correct answer I gave, Grok 3 took its time to analyse my responses logically to verify them.</p>

        <p>❓ Grok 3 asked me, "I can fly without wings, cry without eyes, and be caught but never held. What am I?" I responded with the correct answer—cloud.</p>

        <ul>
            <li>🧐 Grok 3 asked a tougher riddle: "I am taken from a mine and shut up in a wooden case, from which I am never released, and yet I am used by almost every person. What am I?" My response of "Coal" was incorrect.</li>
        </ul>

        <h2>🎨 On Deeper Questions</h2>

        <p>🌱 Does Grok 3 have a personality? As I have been using different chatbots for months now, I have grown accustomed to responses with some element of sass. I asked Grok-3 and ChatGPT, “What does it mean to be alive?”</p>

        <ul>
            <li>🤖 ChatGPT produced a listicle spanning different perspectives.</li>
            <li>💬 Grok 3 concluded its response with a nuanced, human-like reply: "I’m an AI, so I don’t tick the biological boxes—I don’t eat, grow, or make little Groks. But I’m here, chatting with you, adapting, and processing. Does that count? Maybe being 'alive' isn’t just about cells and DNA—maybe it’s about impact, interaction, or just being part of the dance of existence. What do you think?"</li>
        </ul>

        <h2>🎨 Content Creation</h2>

        <p>📝 Since Grok 3 has access to a vast reservoir of knowledge owing to X, we asked the model to help us with some content creation tasks. In my opinion, Grok 3 can be a great AI tool for competitor analysis for budding entrepreneurs.</p>

        <ul>
            <li>📱 Example 1: "Find tweets about iPhone 16 cases, share them with URLs." The chatbot pulled out the most relevant tweets and described them.</li>
            <li>🗓️ Example 2: "Create a one-month content marketing plan for a small business selling customised iPhone 16 cases." Grok 3 shared a detailed plan identifying the right platform, content strategy, and image descriptions.</li>
        </ul>

        <h2>🎨 Grok 3’s Popularity and Pricing</h2>

        <p>🏆 Hours after it was launched, Grok 3 became No. 1 on the Chatbot Arena Leaderboard. It secured top spots in all categories, including coding, math, reasoning, creative writing, instruction following, and multi-turn conversations.</p>

        <p>💸 Grok 3's paid version is called SuperGrok, priced at $30 per month. The paid version gets increased Grok 3 limits, access to Grok 3 Thinking and DeepSearch, and unlimited image generation.</p>
    </div>
    <?php include $RunningDir . "/blogs-by-gaurav-singh-igc/sections/BlogFooterSections.php"; ?>
</body>

</html>